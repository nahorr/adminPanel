<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    protected $fillable = ['title', 'mission', 'vision', 'values', 'history', 'content', 'banner_image', 'about_image', 'team_images'];
}
