<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/',App\Http\Livewire\Home::class)->name('home');
Route::get('/login',App\Http\Livewire\Login::class)->name('login');
Route::get('/register',App\Http\Livewire\Register::class)->name('register');
Route::get('/dashboard',App\Http\Livewire\Dashboard::class)->name('dashboard');
Route::get('/dashboardhome',App\Http\Livewire\Dashhome::class)->name('dashhome');
Route::get('/addfriend',App\Http\Livewire\Addfriend::class)->name('addfriend');
Route::get('/friendrequest',App\Http\Livewire\Friendrequest::class)->name('friendrequest');
Route::get('/friendlist',App\Http\Livewire\Friendlist::class)->name('friendlist');


// ->middleware('auth')

// chat

// Route::get('/chat',function(){
//     return view('chat');
// })->middleware(['auth']);