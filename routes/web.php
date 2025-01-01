<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MoodController;
use App\Http\Controllers\EntryController;


Route::get('/', [HomeController::class, 'index']);
Route::resource('moods', MoodController::class);
Route::resource('entries', EntryController::class);
