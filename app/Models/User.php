<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable {
    use HasFactory, Notifiable;

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',
    ];

    /**
    * The attributes that should be hidden for arrays.
    *
    * @var array
    */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
    * The attributes that should be cast to native types.
    *
    * @var array
    */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setPasswordAttribute( $value ) {
        $this->attributes['password'] = bcrypt( $value );
    }

    //friends

    public function friends() {
        return $this->belongsToMany( 'App\Models\User', 'friends_users', 'user_id', 'friend_id' )->wherePivot('accepted', '=', 1);
    }
    // friendship that I started

    function friendsOfMine() {
        return $this->belongsToMany( 'App\Models\User', 'friends_users', 'user_id', 'friend_id' )
        ->wherePivot( 'accepted', '=', 1 );
    }
    function friendsOfMineRequested() {
        return $this->belongsToMany( 'App\Models\User', 'friends_users', 'user_id', 'friend_id' )
        ->wherePivot( 'accepted', '=', 0 );
    }

    // friendship that I was invited to

    function friendOf() {
        return $this->belongsToMany( 'App\Models\User', 'friends_users', 'friend_id', 'user_id' )
        ->wherePivot( 'accepted', '=', 1 );
    }
    function friendOfRequested() {
        return $this->belongsToMany( 'App\Models\User', 'friends_users', 'friend_id', 'user_id' )
        ->wherePivot( 'accepted', '=', 0 );
    }

    // friendship for wheredoesnthave
    function myFriendswdh() {
        return $this->belongsToMany( 'App\Models\User', 'friends_users', 'user_id', 'friend_id' );
    }
    function friendOfwdh() {
        return $this->belongsToMany( 'App\Models\User', 'friends_users', 'friend_id', 'user_id' );
    }


}
