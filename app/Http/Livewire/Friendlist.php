<?php

namespace App\Http\Livewire;

use App\Models\FriendsUsers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Friendlist extends Component
{
    use WithPagination;
    public $searchFriend = '';

    public function render()
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

        return view('livewire.friendlist', [
            'users' => User::where( 'id', '!=', Auth::id() )->whereIn('id',$alreadyFriendOrRequested)->where('name', 'like', '%'.$this->searchFriend.'%')->paginate(2),
        ]);

    }
}
