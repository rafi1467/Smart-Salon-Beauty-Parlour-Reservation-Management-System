<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'price', 'duration', 'category', 'is_available'
    ];

    // Scope for available services
    public function scopeAvailable($query)
    {
        return $query->where('is_available', true);
    }
}