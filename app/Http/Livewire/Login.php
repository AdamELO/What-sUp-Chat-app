<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component {
    public $form = [
        'email' => '',
        'password' => '',
    ];

    public function submitLogin() {
        $this->validate( [
            'form.email'=>'required|email',
            'form.password'=>'required'
        ] );
        Auth::attempt( $this->form );
        if(Auth::check()){
            $user = User::find( Auth::id() );
            $user->status = 1;
            $user->save();
        }

        return redirect( route( 'dashboard' ) );
    }

    public function render() {
        return view( 'livewire.login' );
    }
}
