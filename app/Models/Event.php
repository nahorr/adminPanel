<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'organizer',
        'description',
        'event_type',
        'start_time',
        'end_time',
        'time_zone',
        'location',
        'is_free',
        'ticket_price',
        'currency',
        'banner_image',
        'capacity',
        'registered_count',
    ];

    protected $casts = [
        'start_time' => 'datetime',
        'end_time' => 'datetime',
        'is_free' => 'boolean',
    ];

    public function registrations()
    {
        return $this->hasMany(EventRegistration::class);
    }
}
