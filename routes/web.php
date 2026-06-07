<?php

use App\Http\Controllers\ClinicAuthController;
use App\Http\Controllers\ClinicDashboardController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/sobre', [PageController::class, 'about'])->name('about');
Route::get('/especialidades', [PageController::class, 'specialties'])->name('specialties');
Route::get('/medicos', [PageController::class, 'doctors'])->name('doctors');

Route::get('/agendamento', [AppointmentController::class, 'create'])->name('appointments.create');
Route::post('/agendamento', [AppointmentController::class, 'store'])->name('appointments.store');

Route::get('/clinica/login', [ClinicAuthController::class, 'showLogin'])->name('clinic.login');
Route::post('/clinica/login', [ClinicAuthController::class, 'authenticate'])->name('clinic.authenticate');
Route::post('/clinica/logout', [ClinicAuthController::class, 'logout'])->name('clinic.logout');

// area restrita da clinica protegida por sessao
Route::middleware('clinic.auth')->group(function (): void {
    Route::get('/clinica/dashboard', [ClinicDashboardController::class, 'index'])->name('clinic.dashboard');
    Route::get('/clinica/agendamentos', [ClinicDashboardController::class, 'appointments'])->name('clinic.appointments');
});

// rota fallback para paginas inexistentes
Route::fallback([PageController::class, 'notFound'])->name('not-found');
