<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Tag extends Model
{
    protected $table='tags';
    public function getRouteKeyName(){
        return 'slug';
     }
    public function tposts(){
        return $this->belongsToMany('App\Resource');
    }
}
