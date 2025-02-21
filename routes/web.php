<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\admin\TestimonialController;
use App\Http\Controllers\admin\TripController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return redirect()->route('home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Admin Testimonials

// Route::middleware(['auth:admin', 'admin'])->group(function () {
//     Route::resource('admin/testimonials', TestimonialController::class);
// });

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('testimonials', TestimonialController::class);
});
//////Admin Trips
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('trips', TripController::class);
});
