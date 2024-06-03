<?php

use App\Livewire\Home;
use App\Livewire\Login;
use App\Livewire\Register;
use App\Livewire\Profile;
use App\Livewire\Setting;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home')->middleware('auth');
Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');
Route::get('/profile', Setting::class)->name('setting')->middleware('auth');
Route::get('/@{username}', Profile::class)->name('profile')->middleware('auth');