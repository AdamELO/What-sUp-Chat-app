<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Logout extends Component
{
    public function logout()
    {   
        $user = User::find( Auth::id() );
        $user->status = 0;
        $user->save();
        Auth::logout();
        return redirect(route('login'));
    }
    public function render()
    {
        return view('livewire.logout');
    }
}
