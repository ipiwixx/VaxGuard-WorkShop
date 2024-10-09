<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\DashboardDoctorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VaccineController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', [HomeController::class, 'index']);


Route::get('/dashboard-doctor', [DashboardDoctorController::class, 'index'])
->name('dashboard-doctor')
->middleware(['auth']);

Route::get('/dashboard-users', [DashboardDoctorController::class, 'index'])
->name('dashboard-users')
->middleware(['auth']);

Route::get('/vaccine/{id}', [VaccineController::class, 'show'])->name('vaccine.show');

Route::get('/login', [AuthenticatedSessionController::class, 'create'])
    ->name('login'); 


Route::post('/login', [AuthenticatedSessionController::class, 'store']);


Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout'); 


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/register', [RegisteredUserController::class, 'create'])
    ->name('register');

Route::post('/register', [RegisteredUserController::class, 'store']);

require __DIR__.'/auth.php';
