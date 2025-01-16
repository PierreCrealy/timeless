<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return redirect('/welcome');
});

Route::get('/welcome', function () {
    return Inertia::render('Dashboard', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->name('dashboard');



Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::post('/profile', [ProfileController::class, 'updateAvatar'])->name('profile.updateAvatar');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

//Route::resource('users', \App\Http\Controllers\UserController::class);
Route::get('/users', [\App\Http\Controllers\UserController::class, 'index'])->name('user.index');
Route::delete('/users', [\App\Http\Controllers\UserController::class, 'delete'])->name('user.delete');

Route::get('/about', function () {
    return Inertia::render('Static/About');
})->name('about');

Route::get('/service', function () {
    return Inertia::render('Static/Services');
})->name('service');

Route::get('/contactUs', function () {
    return Inertia::render('Static/ContactUs');
})->name('contactUs');

Route::get('/pageUnderDevelopment', function () {
    return Inertia::render('Static/pageUnderDevelopment');
})->name('pageUnderDevelopment');

require __DIR__.'/auth.php';
