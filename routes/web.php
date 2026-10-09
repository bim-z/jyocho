<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Socialite;
use App\Http\Controllers\UserController;

Route::view('/', 'welcome')->name('home');

Route::get('/auth/redirect', function () {
    return Socialite::driver('github')->redirect();
});

Route::get('/auth/callback', [UserController::class, 'store']);

require __DIR__.'/settings.php';
