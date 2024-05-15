<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', function () {
    return view('dashboard.home');
})->middleware(['auth', 'verified'])->name('home');

Route::get('/header', function () {
    return view('include.header');
})->middleware(['auth', 'verified'])->name('header');

Route::get('/footer', function () {
    return view('include.footer');
})->middleware(['auth', 'verified'])->name('footer');

Route::get('/category', function () {
    return view('include.category');
})->middleware(['auth', 'verified'])->name('category');

Route::get('/addmember', function () {
    return view('include.addmember');
})->middleware(['auth', 'verified'])->name('addmember');

Route::get('/regismember', function () {
    return view('include.regismember');
})->middleware(['auth', 'verified'])->name('regismember');

Route::get('/userprofile', function () {
    return view('include.userprofile');
})->middleware(['auth', 'verified'])->name('userprofile');

Route::get('/index', function () {
    return view('include.admin.index');
})->middleware(['auth', 'verified'])->name('index');

Route::get('/datamember', function () {
    return view('include.admin.datamember');
})->middleware(['auth', 'verified'])->name('datamember');

Route::get('/inputsaldo', function () {
    return view('include.admin.inputsaldo');
})->middleware(['auth', 'verified'])->name('inputsaldo');

Route::get('/inputsaldo', function () {
    return view('include.admin.inputsaldo');
})->middleware(['auth', 'verified'])->name('inputsaldo');

Route::get('/inputnomer', function () {
    return view('include.admin.inputnomer');
})->middleware(['auth', 'verified'])->name('inputnomer');

Route::get('/aktivasi', function () {
    return view('include.admin.aktivasi');
})->middleware(['auth', 'verified'])->name('aktivasi');

Route::get('/test', function () {
    return view('layouts.layout');
})->name('test');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
