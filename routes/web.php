<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Use Controller
use App\Http\Controllers\CoachController;
use App\Http\Controllers\ContaintController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\AtletController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthsiswaController;
use App\Http\Controllers\AuthpelatihController;




// Use Models
use App\Models\Coach;
use App\Models\Containt;
use App\Models\Level;
use App\Models\Atlet;
use App\Models\Registration;
use App\Models\Frontend;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('Template-Admin.main');
// });

// Login Admin
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login_store', [AuthController::class, 'login_store']);
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register_store', [AuthController::class, 'register_store']);
Route::get('/logout', [AuthController::class, 'logout']);

// Login Atlet
Route::get('/login_atlet', [AuthsiswaController::class, 'login'])->name('login-atlet');
Route::post('/login_store_atlet', [AuthsiswaController::class, 'login_store_atlet']);
Route::get('/register_atlet', [AuthsiswaController::class, 'register'])->name('register-atlet');
Route::post('/register_store_atlet', [AuthsiswaController::class, 'register_store']);
Route::get('/logout', [AuthsiswaController::class, 'logout']);

// Login Coach
Route::get('/login_coach', [AuthpelatihController::class, 'login'])->name('login-coach');
Route::post('/login_store_coach', [AuthpelatihController::class, 'login_store_coach']);
Route::get('/register_coach', [AuthpelatihController::class, 'register'])->name('register_coach');
Route::post('/register_store_coach', [AuthpelatihController::class, 'register_store']);
Route::get('/logout', [AuthpelatihController::class, 'logout']);

// Admin
Route::group(['middleware' => ['auth', 'admin']], function () {
    // Dashboard
    Route::get('/Admin/Dashboard', [DashboardController::class, 'index']);

    // Containt
    Route::get('/Admin/Containt', [ContaintController::class, 'index']);
    Route::get('/Admin/Containt/create', [ContaintController::class, 'create']);
    Route::post('/Admin/Containt', [ContaintController::class, 'store']);
    Route::delete('/Admin/Containt/{containt}', [ContaintController::class, 'destroy']);
    Route::get('/Admin/Containt/{containt}/edit', [ContaintController::class, 'edit']);
    Route::patch('/Admin/Containt/{containt}', [ContaintController::class, 'update']);
    Route::get('/Admin/Containt/{containt}', [ContaintController::class, 'show']);


    // Coach
    Route::get('/Admin/Coach', [CoachController::class, 'index']);
    Route::get('/Admin/Coach/create', [CoachController::class, 'create']);
    Route::post('/Admin/Coach', [CoachController::class, 'store']);
    Route::delete('/Admin/Coach/{coach}', [CoachController::class, 'destroy']);
    Route::get('/Admin/Coach/{coach}/edit', [CoachController::class, 'edit']);
    Route::patch('/Admin/Coach/{coach}', [CoachController::class, 'update']);
    Route::get('/Admin/Coach/{coach}', [CoachController::class, 'show']);

    // Level
    Route::get('/Admin/Level', [LevelController::class, 'index']);
    Route::get('/Admin/Level/create', [LevelController::class, 'create']);
    Route::post('/Admin/Level', [LevelController::class, 'store']);
    Route::delete('/Admin/Level/{level}', [LevelController::class, 'destroy']);
    Route::get('/Admin/Level/{level}/edit', [LevelController::class, 'edit']);
    Route::patch('/Admin/Level/{level}', [LevelController::class, 'update']);

    // Atlet
    Route::get('/Admin/Atlet', [AtletController::class, 'index']);
    Route::get('/Admin/Atlet/create', [AtletController::class, 'create']);
    Route::post('/Admin/Atlet', [AtletController::class, 'store']);
    Route::delete('/Admin/Atlet/{atlet}', [AtletController::class, 'destroy']);
    Route::get('/Admin/Atlet/{atlet}/edit', [AtletController::class, 'edit']);
    Route::patch('/Admin/Atlet/{atlet}', [AtletController::class, 'update']);
    Route::get('/Admin/Atlet/{atlet}', [AtletController::class, 'show']);

    // Registrations
    Route::get('/Admin/Registration', [RegistrationController::class, 'index']);
    Route::get('/Admin/Registration/create', [RegistrationController::class, 'create']);
    Route::post('/User/Registration', [FrontendController::class, 'pendaftaran']);
    Route::delete('/Admin/Registration/{registration}', [RegistrationController::class, 'destroy']);
    Route::get('/Admin/Registration/{registration}/edit', [RegistrationController::class, 'edit']);
    Route::patch('/Admin/Registration/{registration}', [RegistrationController::class, 'update']);
    Route::get('/Admin/Registration/{registration}', [RegistrationController::class, 'show']);
});

// Siswa
Route::group(['middleware' => ['authsiswa', 'siswa']], function () {
    // Dashboard
    Route::get('/Admin/Dashboard-Siswa', [DashboardController::class, 'index']);

    // // Containt
    Route::get('/Admin/Containt-Siswa', [ContaintController::class, 'index']);
    Route::get('/Admin/Containt-Siswa/{containt}', [ContaintController::class, 'show']);


    // Coach
    Route::get('/Admin/Coach-Siswa', [CoachController::class, 'index']);
    Route::get('/Admin/Coach-Siswa/{coach}', [CoachController::class, 'show']);

    // Atlet
    Route::get('/Admin/Atlet-Siswa', [AtletController::class, 'index']);
    Route::get('/Admin/Atlet-Siswa/{atlet}', [AtletController::class, 'show']);

});

// Pelatih
Route::group(['middleware' => ['authpelatih', 'pelatih']], function () {
    // Dashboard
    Route::get('/Admin/Dashboard-Pelatih', [DashboardController::class, 'index']);

    // // Containt
    Route::get('/Admin/Containt-Pelatih', [ContaintController::class, 'index']);
    Route::get('/Admin/Containt-Pelatih/{containt}', [ContaintController::class, 'show']);


    // Coach
    Route::get('/Admin/Coach-Pelatih', [CoachController::class, 'index']);
    Route::get('/Admin/Coach-Pelatih/{coach}', [CoachController::class, 'show']);

    // Level
    Route::get('/Admin/Level-Pelatih', [LevelController::class, 'index']);

    // Atlet
    Route::get('/Admin/Atlet-Pelatih', [AtletController::class, 'index']);
    Route::get('/Admin/Atlet-Pelatih/{atlet}', [AtletController::class, 'show']);

});



Route::get('/User/Home', [FrontendController::class, 'index']);
Route::get('/User/Tentang-Kami', [FrontendController::class, 'TentangKami']);
Route::get('/User/Atlet', [FrontendController::class, 'atlet']);
Route::get('/User/Atlet/{atlet}', [FrontendController::class, 'showatlet']);
Route::get('/User/Pendaftaran/create', [FrontendController::class, 'create']);
Route::post('/User/Pendaftaran', [FrontendController::class, 'pendaftaran']);