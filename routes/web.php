<?php

use App\Livewire\Home;
use App\Livewire\Login;
use App\Livewire\Register;
use App\Livewire\Profile;
use App\Livewire\Setting;
use Illuminate\Support\Facades\Route;

Route::get('/', Profile::class)->middleware('auth');
Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');
Route::get('/home', Home::class)->name('home')->middleware('auth');
Route::get('/profile', Setting::class)->name('setting')->middleware('auth');