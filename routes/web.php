<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Spatie\TranslationLoader\LanguageLine;

Route::get('/', [PostController::class, 'index']);

Route::resource('posts', PostController::class);