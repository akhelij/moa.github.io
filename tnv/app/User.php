<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\CanResetPassword;

class User extends Authenticatable
{
    use Notifiable;

    use SoftDeletes;
    protected $dates = ['deleted_at'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname','lastname','gender','birthday','email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function ip(){
      return $this->HasMany('App\Ip');
    }

    public function reports(){
      return $this->HasMany('App\Report');
    }
    public function selfReports(){
      return $this->HasMany('App\Report','autheur_id');
    }
    public function profile()
    {
        return $this->hasOne('App\Profile');
    }

    public function postlikes(){
        return $this->belongsToMany('App\Post','likes');
    }

    public function commentlikes(){
        return $this->belongsToMany('App\Post','likes');
    }

    public function posts()
    {
        return $this->hasMany('App\Post');
    }

}
