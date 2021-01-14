<?php

namespace App\Http\Livewire;

use App\Models\FriendsUsers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Friendrequest extends Component {
    public $user;

    public function mount() {
        $this->user = Auth::user();
    }

    public function hydrate() {
        $this->user = Auth::user();
    }

    public function acceptRequest( $id ) {
        $accept = FriendsUsers::where( 'friend_id', Auth::id() )->where( 'accepted', 0 )->where( 'user_id', $id )->get();
        $accept[0]->accepted = 1;
        $accept[0]->save();

    }

    public function denyRequest( $id ) {
        $deny = FriendsUsers::where( 'friend_id', Auth::id() )->where( 'accepted', 0 )->where( 'user_id', $id )->get();
        $deny[0]->delete();
    }

    public function render() {
        return view( 'livewire.friendrequest' );
    }
}
