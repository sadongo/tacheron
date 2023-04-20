<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\DomainesController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ElectriciteController;
use App\Http\Controllers\InscriptacheronController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get("/contact", [ContactController::class, "index"]);
Route::get("/mission", [MissionController::class, "index"]);
Route::get("/domaines", [DomainesController::class, "index"]);
Route::get("/electricite", [ElectriciteController::class, "index"]);
Route::get("/inscriptachron", [InscriptacheronController::class, "index"]);




// Email related routes
Route::get("/mail", [MailController::class, "index"]);
