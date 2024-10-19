<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable=[
        'name',
        'image',
        'designation',
        'insta_url',
        'linkedin_url',
        'twitter_url',
        'fb_url',
        'status'
    ];
}
