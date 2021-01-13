<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/',[\App\Http\Controllers\AgencyController::class,'index'])->name('list');
Route::get('/add',[\App\Http\Controllers\AgencyController::class,'create'])->name('show.create');
Route::post('/add',[\App\Http\Controllers\AgencyController::class,'store'])->name('create');
Route::get('delete/{id}',[\App\Http\Controllers\AgencyController::class,'destroy'])->name('delete');
Route::get('edit/{id}',[\App\Http\Controllers\AgencyController::class,'edit'])->name('show.edit');
Route::post('edit/{id}',[\App\Http\Controllers\AgencyController::class,'update'])->name('edit');
Route::post('search',[\App\Http\Controllers\AgencyController::class,'search'])->name('search');
