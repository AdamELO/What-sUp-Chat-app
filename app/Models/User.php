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
        ->wherePivot( 'accepted', '=', 1 ) // to filter only accepted
        ->withPivot( 'accepted' );
        // or to fetch accepted value
    }
    function friendsOfMineRequested() {
        return $this->belongsToMany( 'App\Models\User', 'friends_users', 'user_id', 'friend_id' )
        ->wherePivot( 'accepted', '=', 0 )
        ->withPivot( 'accepted' );
    }

    // friendship that I was invited to

    function friendOf() {
        return $this->belongsToMany( 'App\Models\User', 'friends_users', 'friend_id', 'user_id' )
        ->wherePivot( 'accepted', '=', 1 )
        ->withPivot( 'accepted' );
    }
    function friendOfRequested() {
        return $this->belongsToMany( 'App\Models\User', 'friends_users', 'friend_id', 'user_id' )
        ->wherePivot( 'accepted', '=', 0 )
        ->withPivot( 'accepted' );
    }
    // friendship relations for wheredoesnthave
    function mesamis() {
        return $this->belongsToMany( 'App\Models\User', 'friends_users', 'user_id', 'friend_id' );
    }
    function moiamis() {
        return $this->belongsToMany( 'App\Models\User', 'friends_users', 'friend_id', 'user_id' );
    }


    // accessor allowing you call $user->friends

    public function getFriendsAttribute() {
        if ( ! array_key_exists( 'friends_users', $this->relations ) ) $this->loadFriends();

        return $this->getRelation( 'friends' );
    }

    protected function loadFriends() {
        if ( ! array_key_exists( 'friends_users', $this->relations ) ) {
            $friends = $this->mergeFriends();

            $this->setRelation( 'friends_users', $friends );
        }
    }

    protected function mergeFriends() {
        return $this->friendsOfMine->merge( $this->friendOf );
    }

}
// $related = new Collection();

// foreach ($question->tags as $tag)
// {
//     $related = $related->merge($tag->questions);
// }