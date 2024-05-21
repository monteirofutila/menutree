<?php

use App\Livewire\Home;
use App\Livewire\Login;
use App\Livewire\Profile;
use Illuminate\Support\Facades\Route;

Route::get('/', Profile::class);
Route::get('/login', Login::class);
Route::get('/home', Home::class);