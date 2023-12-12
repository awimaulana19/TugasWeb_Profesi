<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfesiController;

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

Route::get('/', [ProfesiController::class, 'index']);
Route::get('/login', [ProfesiController::class, 'login'])->name('login');
Route::post('/login', [ProfesiController::class, 'login_action']);
Route::get('/admin', [ProfesiController::class, 'admin'])->middleware('auth');
Route::post('/tambah', [ProfesiController::class, 'store'])->middleware('auth');
Route::post('/edit/{id}', [ProfesiController::class, 'update'])->middleware('auth');
Route::get('/hapus/{id}', [ProfesiController::class, 'hapus'])->middleware('auth');

Route::get('/check-connection', function () {
    try {
        DB::connection()->getPdo();
        return "Database connection is established.";
    } catch (\Exception $e) {
        return "Unable to connect to the database. Error: " . $e->getMessage();
    }
});
