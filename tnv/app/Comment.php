<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Comment extends Model
{
    //

    use SoftDeletes;
    protected $dates = ['deleted_at'];


    public function post(){
      return $this->belongsTo('App\Post');
    }
    public function category(){
      return $this->belongsTo('App\Category');
    }
    public function user(){
      return $this->belongsTo('App\User');
    }
    public function comments(){
        return $this->belongsToMany('App\User','comments','comment_id','user_id')
            ->withPivot('id','content','category_id')
            ->withTimestamps();
    }

    public function likes(){

        return $this->belongsToMany('App\User','likes','comment_id','user_id')
            ->withTimestamps();
    }

    public function reports(){
      return $this->hasMany('App\Report');
    }

    public function criteres(){
      return $this->belongsToMany('App\Critere','critere_post', 'critere_id', 'comment_id');
    }

}
