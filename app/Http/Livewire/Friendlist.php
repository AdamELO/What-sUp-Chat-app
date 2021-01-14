<?php

namespace App\Http\Livewire;

use App\Models\FriendsUsers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Friendlist extends Component
{
    public $users;
    public function mount()
    {
        $myFriends = FriendsUsers::where('user_id',Auth::id())->where('accepted',1)->get();
        $imFriend = FriendsUsers::where('friend_id',Auth::id())->where('accepted',1)->get();
        $alreadyFriendOrRequested = [];
        for ($i=0; $i < count($myFriends) ; $i++) { 
            array_push($alreadyFriendOrRequested,$myFriends[$i]['friend_id']);
        }
        for ($i=0; $i < count($imFriend) ; $i++) { 
            array_push($alreadyFriendOrRequested,$imFriend[$i]['user_id']);
        }

        $this->users = User::where( 'id', '!=', Auth::id() )->whereIn('id',$alreadyFriendOrRequested)->get();
    }
    public function render()
    {
        return view('livewire.friendlist');
    }
}
