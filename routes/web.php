<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/{vueRoutes}', HomeController::class)
    ->where('vueRoutes', '.*');
