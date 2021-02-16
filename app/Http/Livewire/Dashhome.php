<?php

namespace App\Http\Livewire;

use App\Models\FriendsUsers;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Dashhome extends Component
{
    public $nbFriends;
    public $nbRequests;
    public $status;

    public function mount()
    {   
        // nb Friends
        $myFriends = FriendsUsers::where('user_id',Auth::id())->where('accepted',1)->get();
        $imFriend = FriendsUsers::where('friend_id',Auth::id())->where('accepted',1)->get();
        $alreadyFriendOrRequested = [];
        for ($i=0; $i < count($myFriends) ; $i++) { 
            array_push($alreadyFriendOrRequested,$myFriends[$i]['friend_id']);
        }
        for ($i=0; $i < count($imFriend) ; $i++) { 
            array_push($alreadyFriendOrRequested,$imFriend[$i]['user_id']);
        }

        $this->nbFriends = count($alreadyFriendOrRequested);

        //nb friend requests pending
        $this->nbRequests = count(Auth::user()->friendOfRequested);
        //status
        $this->status = Auth::user()->status;
    }
    public function hydrate(){
        $this->status = Auth::user()->status;
    }
    public function render()
    {
        return view('livewire.dashhome');
    }
}
