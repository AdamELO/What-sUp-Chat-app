<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class Addfriend extends Component {
    use WithPagination;
    
    public function addFriend( $id ) {
        $user = User::find(Auth::id());
        $user->friends()->attach([$id => ['accepted' => 0]]);
    }

    public function render() {
        $users = User::where('id', '!=', Auth::id())
        ->whereDoesntHave('myFriendswdh', function ($query) {
            $query->where('friend_id', Auth::id());
        })
        ->whereDoesntHave('friendOfwdh', function ($query) {
            $query->where('user_id', Auth::id());
        })->paginate(2);
        return view( 'livewire.addfriend', ['users' => $users] );
    }
}





