<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Portfolio');
})->name('home');

Route::get('/impressum', function () {
    return Inertia::render('Impressum');
})->name('impressum');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
