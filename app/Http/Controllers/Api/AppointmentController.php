<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Notification;
use App\Models\Reminder;
use Carbon\Carbon;

class AppointmentController extends Controller {

    public function book(Request $r){
        $r->validate([
            'user_id'=>'nullable|numeric',
            'service_id'=>'required|numeric',
            'staff_id'=>'nullable|numeric',
            'date'=>'required|date',
            'time'=>'required'
        ]);

        // Optional: check availability logic here (e.g., no double booking)
        $exists = Appointment::where('staff_id', $r->staff_id)
                    ->where('date', $r->date)
                    ->where('time', $r->time)
                    ->where('status','booked')->exists();
        if($exists){
            return response()->json(['success'=>false,'message'=>'Selected slot not available'], 409);
        }

        $appointment = Appointment::create([
            'user_id'=>$r->user_id,
            'service_id'=>$r->service_id,
            'staff_id'=>$r->staff_id,
            'date'=>$r->date,
            'time'=>$r->time,
        ]);

        // Create immediate confirmation notification (pending)
        $message = "আপনার অ্যাপয়েন্টমেন্ট কনফার্ম হয়েছে: {$appointment->date} {$appointment->time}";
        Notification::create([
            'user_id'=>$r->user_id,
            'appointment_id'=>$appointment->id,
            'channel'=>'email',
            'to'=>$r->user_email ?? null,
            'message'=>$message,
            'status'=>'pending',
            'scheduled_at'=>now()
        ]);

        // create reminder (e.g., 1 hour before) — configurable
        $appointmentDateTime = Carbon::createFromFormat('Y-m-d H:i:s', $appointment->date.' '.$appointment->time.':00');
        $remindAt = $appointmentDateTime->copy()->subHour(); // 1 hour before
        Reminder::create(['appointment_id'=>$appointment->id,'remind_at'=>$remindAt]);

        return response()->json(['success'=>true,'message'=>'Booked','data'=>$appointment]);
    }

    public function cancel(Request $r, $id){
        $appointment = Appointment::find($id);
        if(!$appointment) return response()->json(['success'=>false,'message'=>'Not found'],404);

        $appointment->status = 'cancelled';
        $appointment->save();

        // create notification
        Notification::create([
            'user_id'=>$appointment->user_id,
            'appointment_id'=>$appointment->id,
            'channel'=>'email',
            'to'=>$r->user_email ?? null,
            'message'=>"আপনার অ্যাপয়েন্টমেন্ট বাতিল করা হয়েছে: {$appointment->date} {$appointment->time}",
            'status'=>'pending',
            'scheduled_at'=>now()
        ]);

        return response()->json(['success'=>true,'message'=>'Cancelled']);
    }

    public function reschedule(Request $r, $id){
        $r->validate(['date'=>'required|date','time'=>'required']);

        $appointment = Appointment::find($id);
        if(!$appointment) return response()->json(['success'=>false,'message'=>'Not found'],404);

        $old = $appointment->date.' '.$appointment->time;
        $appointment->date = $r->date;
        $appointment->time = $r->time;
        $appointment->status = 'rescheduled';
        $appointment->save();

        // remove old reminders and create new one
        Reminder::where('appointment_id',$appointment->id)->delete();
        $dt = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $appointment->date.' '.$appointment->time.':00');
        Reminder::create(['appointment_id'=>$appointment->id,'remind_at'=>$dt->copy()->subHour()]);

        Notification::create([
            'user_id'=>$appointment->user_id,
            'appointment_id'=>$appointment->id,
            'channel'=>'email',
            'to'=>$r->user_email ?? null,
            'message'=>"আপনার অ্যাপয়েন্টমেন্ট পরিবর্তন করা হয়েছে: আগের সময় {$old} → নতুন সময় {$appointment->date} {$appointment->time}",
            'status'=>'pending',
            'scheduled_at'=>now()
        ]);

        return response()->json(['success'=>true,'message'=>'Rescheduled','data'=>$appointment]);
    }
}
