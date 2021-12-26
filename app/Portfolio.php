<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{

    protected $table    = "portfolios";
    protected $fillable = [
        'title',
        'url',
        'github',
        'active',
        'category_id',
    ];
    //protected $hidden   = ['created_at', 'updated_at'];
    //public $timestamps  = true;

    public function categories()
    {
        return $this->belongsTo('App\Category');
    }
}
