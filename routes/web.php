<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Events\AttendEventController;
use App\Http\Controllers\Events\LeaveEventController;
use App\Http\Controllers\Events\PaginateEventsController;
use App\Http\Controllers\Events\ViewEventController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', LandingController::class)->name('welcome');

Route::get('/dashboard', DashboardController::class)
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('events')->group(function () {
    Route::group(['middleware' => 'auth'], function () {
        Route::post('/{event}/join', AttendEventController::class)->name('events.join');
        Route::post('/{event}/leave', LeaveEventController::class)->name('events.leave');
    });
    Route::get('/', PaginateEventsController::class)->name('events.index');
    Route::get('/{event:slug}', ViewEventController::class)->name('events.show');
});

require __DIR__.'/auth.php';
