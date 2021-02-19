<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
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
            'form.email'=>'required|email|unique:users,email',
            'form.password'=>'required|confirmed'
        ] );
        $user = User::create($this->form);

        auth()->login($user);
        if(Auth::check()){
            $user->status = 1;
            $user->avatar = 'avatar.jpg';
            $user->save();
        }

        return redirect( route( 'dashboard' ) );
    }

    public function render() {
        return view( 'livewire.register' );
    }
}
