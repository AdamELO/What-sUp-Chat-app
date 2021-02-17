<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Status extends Component
{
    public $user;
    public function mount(){
        $this->user = User::find( Auth::id() );
    }
    public function hydrate(){
        $this->user = User::find( Auth::id() );
    }
    public function changeStatus(){
        if ($this->user->status == 0) {
            $this->user->status = 1;
            $this->user->save();
        }else{
            $this->user->status = 0;
            $this->user->save();
        }
    }

    public function render()
    {
        return view('livewire.status');
    }
}
