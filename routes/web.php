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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\regController::class, 'index']);
Route::post('/save', [App\Http\Controllers\regController::class, 'save']);

Route::get('/view', [App\Http\Controllers\viewController::class, 'index']);

Route::get('/view/{id}', [App\Http\Controllers\viewController::class, 'edit'])->name('editview');
Route::Put('update/{id}', [App\Http\Controllers\viewController::class, 'update']);

Route::get('/delete/{id}', [App\Http\Controllers\viewController::class, 'delete'])->name('deleteview');

Route::get('/search/', [App\Http\Controllers\SearchController::class, 'index'])->name('search');