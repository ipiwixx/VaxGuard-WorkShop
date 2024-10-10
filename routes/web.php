<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\DashboardDoctorController;
use App\Http\Controllers\DashboardUsersController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VaccineController;
use App\Http\Controllers\VaccineUsersController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', [HomeController::class, 'index']);
Route::get('/confidentiality', [HomeController::class, 'confidentiality']);
Route::get('/RGPD', [HomeController::class, 'RGPD']);
Route::get('/conditions', [HomeController::class, 'conditions']);




Route::get('/dashboard-doctor', [DashboardDoctorController::class, 'index'])
->name('dashboard-doctor')
->middleware(['auth']);

Route::get('/dashboard-users', [DashboardUsersController::class, 'index'])
->name('dashboard-users')

->middleware(['auth']);

Route::get('/vaccine/{id}', [VaccineController::class, 'show'])
->name('vaccine.show');

Route::get('/vaccine-users/{id}', [VaccineUsersController::class, 'show'])
->name('vaccine-users.show')
->middleware(['auth']);

Route::resource('patients', PatientsController::class);

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
