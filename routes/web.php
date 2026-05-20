<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    //student management
    Route::get('students', [\App\Http\Controllers\studentmngtController::class, 'index'])->name('student.index');
    Route::get('students/create', [\App\Http\Controllers\studentmngtController::class, 'create'])->name('student.create');
    Route::post('students', [\App\Http\Controllers\studentmngtController::class, 'store'])->name('student.store');
    Route::get('students/{id}/edit', [App\Http\Controllers\studentmngtController::class, 'edit'])->name('student.edit');
    Route::put('students/{id}', [App\Http\Controllers\studentmngtController::class, 'update'])->name('student.update');
    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::delete('students/{id}', [App\Http\Controllers\studentmngtController::class, 'destroy'])->name('student.destroy');

});
