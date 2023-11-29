<?php

use Illuminate\Support\Facades\Route;

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

Route::middleware('auth')->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('department', [App\Http\Controllers\DepartmentController::class, 'index'])->name('department.index');
    Route::post('department', [App\Http\Controllers\DepartmentController::class, 'store'])->name('department.store');
    Route::delete('department/{department}', [App\Http\Controllers\DepartmentController::class, 'destroy'])->name('department.destroy');
});
