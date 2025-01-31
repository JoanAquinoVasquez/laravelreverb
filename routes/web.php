<?php

use App\Events\PrivateEvent;
use App\Events\PublicEvent;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('test', function () {
    event(new PublicEvent('Hello World'));
});

Route::get('private', function () {
    event(new PrivateEvent('Hello World Private jejeje', 1));
});
