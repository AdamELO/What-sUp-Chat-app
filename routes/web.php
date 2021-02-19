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
Route::get('/dashboard',App\Http\Livewire\Dashboard::class)->middleware(['auth'])->name('dashboard');
Route::get('/editprofile',App\Http\Livewire\Uiedit::class)->middleware(['auth'])->name('edit');
Route::get('/addfriend',App\Http\Livewire\Uiaddfriend::class)->middleware(['auth'])->name('addfriend');
Route::get('/friendrequest',App\Http\Livewire\Uirequest::class)->middleware(['auth'])->name('friendrequest');
Route::get('/uichat{id?}',App\Http\Livewire\Uichat::class)->middleware(['auth'])->name('chat');
