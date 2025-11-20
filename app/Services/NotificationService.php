<?php
namespace App\Services;
use App\Models\Notification;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class NotificationService {
    public static function sendPendingNotifications(){
        $pending = Notification::where('status','pending')
                    ->where(function($q){
                        $q->whereNull('scheduled_at')->orWhere('scheduled_at','<=', Carbon::now());
                    })->get();
        foreach($pending as $n){
            try{
                if($n->channel == 'email'){
                    // Use a Mailable or simple Mail::raw
                    Mail::raw($n->message, function($m) use ($n){
                        $m->to($n->to)->subject('Salon Notification');
                    });
                    $n->status = 'sent';
                    $n->sent_at = Carbon::now();
                    $n->save();
                } else if($n->channel == 'sms'){
                    // call SMS provider (stub)
                    // SmsService::send($n->to, $n->message)
                    // assume success:
                    $n->status = 'sent';
                    $n->sent_at = Carbon::now();
                    $n->save();
                }
            } catch(\Exception $e){
                $n->status = 'failed';
                $n->save();
            }
        }
    }
}
