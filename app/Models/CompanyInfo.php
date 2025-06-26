<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyInfo extends Model
{
    protected $fillable = [
        'name',
        'tagline',
        'logo',
        'email',
        'phone',
        'alt_phone',
        'website',
        'address',
        'city',
        'state',
        'country',
        'postal_code',
        'registration_number',
    ];
}
