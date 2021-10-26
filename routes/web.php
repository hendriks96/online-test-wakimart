<?php

use App\Http\Controllers\DepartementController;
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

Route::get('/', [DepartementController::class, 'index'])->name('index');

Route::get('create', [DepartementController::class, 'create'])->name('create');
Route::post('store', [DepartementController::class, 'store'])->name('store');


Route::get('show/{id}', [DepartementController::class, 'show'])->name('show');
Route::get('edit/{id}', [DepartementController::class, 'edit'])->name('edit');
Route::put('update/{id}', [DepartementController::class, 'update'])->name('update');
Route::delete('destroy/{id}', [DepartementController::class, 'destroy'])->name('destroy');
