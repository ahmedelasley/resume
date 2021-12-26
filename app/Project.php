<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    //protected $table    = "projects";
    protected $fillable = [
        'title',
        'url',
        'github',
        'active',
        'experience_id',
    ];
    //protected $hidden   = ['created_at', 'updated_at'];
   //public $timestamps  = true;
    

    public function experiences()
    {
        return $this->belongsTo('App\Experience','experience_id','id');
    }
}
