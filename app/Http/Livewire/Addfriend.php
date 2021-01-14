<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class Addfriend extends Component {
    use WithPagination;
    
    // public $users;
    
    // public function mount() {
    //     $this->users = User::where('id', '!=', Auth::id())
    //     ->whereDoesntHave('mesamis', function ($query) {
    //         $query->where('friend_id', Auth::id());
    //     })
    //     ->whereDoesntHave('moiamis', function ($query) {
    //         $query->where('user_id', Auth::id());
    //     })
    //     ->get();
        
    // }

    
    public function addFriend( $id ) {
        $user = User::find(Auth::id());
        $user->friends()->attach([$id => ['accepted' => 0]]);
        // $user = new FriendsUsers();
        // $user->user_id = Auth::id();
        // $user->friend_id = $id;
        // $user->accepted = 0;
        // $user->save();
    }


    public function render() {
        $users = User::where('id', '!=', Auth::id())
        ->whereDoesntHave('mesamis', function ($query) {
            $query->where('friend_id', Auth::id());
        })
        ->whereDoesntHave('moiamis', function ($query) {
            $query->where('user_id', Auth::id());
        })->paginate(2);
        return view( 'livewire.addfriend', ['users' => $users] );
    }
}


// // access all friends
// $user->friends; // collection of unique User model instances

// // access friends a user invited
// $user->friendsOfMine; // collection

// // access friends that a user was invited by
// $user->friendOf; // collection

// // and eager load all friends with 2 queries
// $usersWithFriends = User::with('friendsOfMine', 'friendOf')->get();

// // then
// $users->first()->friends; // collection

// // Check the accepted value:
// $user->friends->first()->pivot->accepted;


