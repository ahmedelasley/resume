<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{

    //protected $table    = "experiences";
    protected $fillable = [
        'title_job',
        'start_date',
        'end_date',
        'company',
        'location',
        'url',
        'active'
    ];
    //protected $hidden   = ['created_at', 'updated_at'];
    //public $timestamps  = true;

    public function projects()
    {
        return $this->hasMany('App\Project');
    }
}
