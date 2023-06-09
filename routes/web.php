<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\DomainesController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ElectriciteController;
use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\FormtacheronController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EspaceTacheronController;
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
Route::get("/formtacheron", [formtacheronController::class, "index"]);
Route::get("/home", [HomeController::class, "index"]);
Route::get("/espacetacheron", [EspaceTacheronController::class, "index"]);
Route::resource('/entreprises', EntrepriseController::class);






// Email related routes
Route::get("/mail", [MailController::class, "index"]);
