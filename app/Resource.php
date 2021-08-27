<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Resource extends Model
{
    protected $table='resources';
   
    public function getRouteKeyName(){
        return 'slug';
     } 
     public function tags(){
        return $this->belongsToMany('App\Tag');
    }
}
