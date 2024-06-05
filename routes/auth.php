<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {

    Route::post('logout', [AuthController::class, 'logout'])
        ->name('logout');

});