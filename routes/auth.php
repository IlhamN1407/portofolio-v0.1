<?php


use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('login', function () {
        return view('admin.login');
    })->name('login');
});
