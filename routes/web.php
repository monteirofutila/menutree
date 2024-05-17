<?php

use App\Livewire\Home;
use App\Livewire\Profile;
use Illuminate\Support\Facades\Route;

Route::get('/', Profile::class);
Route::get('/home', Home::class);