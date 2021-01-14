<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component {
    public $form = [
        'name' => '',
        'email' => '',
        'password' => '',
        'password_confirmation' => '',
    ];

    public function submitRegister() {
        $this->validate( [
            'form.name'=>'required',
            'form.email'=>'required|email',
            'form.password'=>'required|confirmed'
        ] );
        User::create($this->form);
        return redirect( route( 'login' ) );
    }

    public function render() {
        return view( 'livewire.register' );
    }
}
