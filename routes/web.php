<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QrcodeController;
use App\Livewire\Home;
use App\Livewire\Login;
use App\Livewire\Register;
use App\Livewire\Profile;
use App\Livewire\Setting;
use Illuminate\Support\Facades\Route;

require __DIR__ . '/auth.php';

Route::put('/profiles/{id}', [ProfileController::class, 'update'])->name('profile.update')->middleware('auth');
Route::post('/profiles/{id}/upload', [ProfileController::class, 'upload'])->name('profile.upload')->middleware('auth');
Route::get('/qr-code', [QrcodeController::class, 'show'])->name('qrcode')->middleware('auth');

Route::get('/', Home::class)->name('home')->middleware('auth');
Route::get('/profile', Setting::class)->name('setting')->middleware('auth');

Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');
Route::get('/@{username}', Profile::class)->name('profile');