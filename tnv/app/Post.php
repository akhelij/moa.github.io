<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function criteres(){
      return $this->belongsToMany('App\Critere','critere_post')
          ->withPivot('note')
          ->withTimestamps();
    }

    public function category(){
      return $this->belongsTo('App\Category');
    }
    public function user(){
      return $this->belongsTo('App\User');
    }
    public function comments(){
        return $this->belongsToMany('App\User','comments','post_id','user_id')
            ->withPivot('id','content','category_id')
            ->withTimestamps();
    }
    public function comment_likes(){
        return $this->belongsToMany('App\User','likes','comment_id','user_id')
            ->withTimestamps();
    }

    public function likes(){
      return $this->belongsToMany('App\User','likes','post_id','user_id')
          ->withTimestamps();
    }

    public function reports(){
      return $this->hasMany('App\Report');
    }
}
