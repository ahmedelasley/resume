<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{
    //
    protected $fillable = [
        'skill',
        'value',
        'active',
        'user_id',

    ];
    protected $hidden   = ['created_at', 'updated_at'];
}
