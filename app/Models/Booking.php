<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Booking extends Model
{
    use HasFactory;

    // Which columns can be filled using forms
    protected $fillable = [
        'user_id',
        'service_name',
        'service_price',
        'booking_date',
        'booking_time',
        'payment_status',
        'invoice_number',
        'loyalty_points_earned',
    ];

    // A booking belongs to a user/customer
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
