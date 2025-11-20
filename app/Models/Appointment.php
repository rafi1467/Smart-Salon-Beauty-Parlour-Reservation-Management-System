<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model {
    use HasFactory;
    protected $fillable = ['user_id','service_id','staff_id','date','time','status','notes'];
    public function reminders(){ return $this->hasMany(Reminder::class); }
}
