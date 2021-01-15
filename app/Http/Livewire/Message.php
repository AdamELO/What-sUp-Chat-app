<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Message extends Component
{
    public $messages;

    protected $listeners = ['getMessage'];

    public function mount()
    {

        $this->messages = [];
    }

    public function getMessage($message)
    {
        $this->messages[] = $message;
    }

    public function render()
    {
        return view('livewire.message');
    }
}
