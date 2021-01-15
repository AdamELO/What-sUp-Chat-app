<?php

namespace App\Http\Livewire;

use App\Events\ChatEvent;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Chat extends Component
{
    public $message;
    public $user;

    public function mount()
    {
        $this->message = '';
        $this->user = Auth::user()->name;

    }

    public function resetFilters()
    {
        $this->reset('message');
    }


    public function updated($field)
    {
        $this->validateOnly($field, [
            "message" => "required"
        ], [
            "message.required" => "Text is required please!!!"
        ]);
    }

    public function sendMessage()
    {
        $this->validate([
            "message" => "required"
        ]);

        $this->emit('messageSent');

        // $this->emit('scrollLi');
        // $this->emit( 'getMessage', $data);

        event(new ChatEvent($this->message, $this->user));
        
        $this->resetFilters();
    }
    public function render()
    {
        return view('livewire.chat');
    }
}
