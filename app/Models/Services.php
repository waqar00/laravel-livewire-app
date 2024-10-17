<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{

    protected $fillable=[
        'title',
        'description',
        'short_description',
        'icon_class',
        'status',
    ];
}
