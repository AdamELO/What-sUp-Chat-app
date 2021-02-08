<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Editprofile extends Component
{
    public $name;
    public $email;
    public $password;
    public $avatar;
    use WithFileUploads;

    public function profileEdit(){
        $this->validate( [
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required'
        ] );
        $user = User::find( Auth::id() );
        $user->name = $this->name;
        $user->email = $this->email;
        $user->password = $this->password;
        Storage::disk('public')->delete($user->avatar);
        $user->avatar = Storage::disk( 'public' )->put( '', $this->avatar );
        $user->save();
        return redirect( route( 'dashboard' ) );
    }

    public function render()
    {

        return view('livewire.editprofile');
    }
}
