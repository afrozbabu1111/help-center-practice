<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelpCenterController;

Route::get('/', [HelpCenterController::class, 'index'])->name('home');

Route::get('/category/{category}', [HelpCenterController::class, 'category'])
    ->name('category');

Route::get('/article/{article}', [HelpCenterController::class, 'article'])
    ->name('article');
