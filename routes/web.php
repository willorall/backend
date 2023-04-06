<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\kendaraancontroller;
use App\Http\Controllers\departemencontroller;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/kendaraan',[kendaraancontroller::class, 'index']);
Route::get('/kendaraan/create',[kendaraancontroller::class, 'create']);
Route::post('/kendaraan',[kendaraancontroller::class, 'store']);
Route::get('/kendaraan/edit/{id}',[kendaraancontroller::class, 'edit']);
Route::put('/kendaraan/{id}',[kendaraancontroller::class, 'update']);

Route::get('/departemen',[departemencontroller::class, 'index']);
Route::get('/departemen/create',[departemencontroller::class, 'create']);
Route::post('/departemen',[departemencontroller::class, 'store']);
Route::get('/departemen/edit/{id}',[departemencontroller::class, 'edit']);
Route::put('/departemen/{id}',[departemencontroller::class, 'update']);
