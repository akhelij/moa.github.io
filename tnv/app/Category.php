<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //


    public function posts(){
      return $this->hasMany('App\Post');
    }
    public function criteres(){
      return $this->hasMany('App\Critere');
    }
    public function comments(){
      return $this->hasMany('App\Comment');
    }
}
