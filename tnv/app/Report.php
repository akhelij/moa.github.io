<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    //
    public $fillable=["autheur_id"];
    public function user(){
      return $this->belongsTo('App\User');
    }

    public function post(){
      return $this->belongsTo('App\Post');
    }

    public function comment(){
      return $this->belongsTo('App\Comment');
    }

    public function autheur(){
      return $this->belongsTo('App\User','autheur_id');
    }



}
