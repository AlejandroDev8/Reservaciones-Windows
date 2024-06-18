<?php

use App\Http\Controllers\HelperController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');

Route::get('/help', [HelperController::class, 'index'])->name('help.index');

Route::middleware('auth', 'verified')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', [ReservationController::class, 'index'])->name('reservations.index');
    Route::get('/reservations/create', [ReservationController::class, 'create'])->name('reservations.create');
    Route::get('/reservaciones/{reservacion}/aceptar-solicitud', [ReservationController::class, 'aceptarSolicitud'])->name('reservaciones.aceptar-solicitud');
    Route::get('/reservaciones/{reservacion}/rechazar-solicitud', [ReservationController::class, 'rechazarSolicitud'])->name('reservaciones.rechazar-solicitud');
    Route::get('/help/users', [HelperController::class, 'users'])->name('help.users');
    Route::get('/help/admin', [HelperController::class, 'admin'])->name('help.admin');
});

require __DIR__ . '/auth.php';
