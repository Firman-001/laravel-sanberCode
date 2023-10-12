<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/',  [HomeController::class, 'utama']);
Route::get('/biodata', [HomeController::class, 'bio']);
Route::post('/submit', [HomeController::class, 'submit']);
Route::get('/table', function(){
    return view('halaman.table');
});
Route::get('/data-table', function(){
    return view('halaman.data-table');
});