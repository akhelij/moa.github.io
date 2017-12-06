<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Critere extends Model
{
    //
    public function category(){
      return $this->belongsTo('App\Category');
    }

    public function posts(){
      return $this->belongsToMany('App\Post','critere_post')
          ->withPivot('note')
            ->withTimestamps();
    }
    public function comments(){
      return $this->belongsToMany('App\Critere','critere_post', 'critere_id', 'comment_id');
    }
}
