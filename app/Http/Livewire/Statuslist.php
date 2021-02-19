<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Statuslist extends Component
{
    public $friend;
    public function render()
    {
        return view('livewire.statuslist');
    }
}
