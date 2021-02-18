<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic;

class Editprofile extends Component
{
    use WithFileUploads;
    public $name;
    public $email;
    public $password;
    public $avatar;
    public User $user;

    public function mount() 
    {
        $this->user = Auth::user();
    }

    public function update(){
        $this->validate( [
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required'
        ] );
        $user = User::find( Auth::id() );
        $user->name = $this->name;
        $user->email = $this->email;
        $user->password = $this->password;
        if ($user->avatar != null) {
            Storage::disk('public')->delete($user->avatar);
            $user->avatar = Storage::disk( 'public' )->put( '', $this->avatar );
        }
        $user->save();
        session()->flash('message', 'Profile successfully updated.');
        return redirect()->to('/dashboard');
    }
    

    public function render()
    {

        return view('livewire.editprofile');
    }
}
