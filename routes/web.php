<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BotController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\UpdateController;

Auth::routes();

Route::get('/', HomeController::class)->name('home');

Route::prefix('profile-edit')->name('editProfile.')->middleware('auth')->controller(UpdateController::class)->group(function () {
    Route::get('/', 'renderPage')->name('index');
    Route::post('/update', 'update')->name('update');
});

Route::name('bot.')->prefix('bot')->controller(BotController::class)->group(function () {
    Route::get('/', 'renderPage')->name('index');
    Route::post('/send-message', 'sendMessage')->name('sendMessage');
});

Route::name('chat.')->prefix('chat')->controller(ChatController::class)->group(function () {
    Route::get('/', 'renderPage')->name('index');
});

