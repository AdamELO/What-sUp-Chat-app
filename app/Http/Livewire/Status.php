<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Status extends Component
{
    public $status;
    public function hydrate(){
        $this->status = Auth::user()->status;
    }
    public function changeStatus(){
        if (Auth::user()->status == 0) {
            $user = User::find( Auth::id() );
            $user->status = 1;
            $user->save();
        }else{
            $user = User::find( Auth::id() );
            $user->status = 0;
            $user->save();
        }
    }

    public function render()
    {
        return view('livewire.status');
    }
}
