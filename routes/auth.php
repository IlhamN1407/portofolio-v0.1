<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::middleware('guest')->group(function () {
    Route::get('login', function () {
        return view('admin.login');
    })->name('login');
    Route::post('/sign', [AuthenticatedSessionController::class, 'store'])
        ->name('sign');
});
