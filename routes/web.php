<?php

use Illuminate\Support\Facades\Route;

// Use Controller
use App\Http\Controllers\CoachController;
use App\Http\Controllers\ContaintController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\AtletController;




// Use Models
use App\Models\Coach;
use App\Models\Containt;
use App\Models\Level;
use App\Models\Atlet;

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