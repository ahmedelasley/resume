<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $table    = "categories";
    protected $fillable = [
        'title',
        'key',
        'active',
    ];
    //protected $hidden   = ['created_at', 'updated_at'];
    //public $timestamps  = true;

    public function portfolios()
    {
        return $this->hasMany('App\Portfolio');
    }



}
