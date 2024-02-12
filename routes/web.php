<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommuneController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::resource('communes','CommuneController');

Route::get('/', CommuneController::class .'@index')->name('communes.index');
// returns the form for adding a commune

Route::get('/communes/create', CommuneController::class . '@create')->name('communes.create');
// adds a commune to the database

Route::post('/communes', CommuneController::class .'@store')->name('communes.store');
// returns a page that shows a full commune

Route::get('/communes/{commune}', CommuneController::class .'@show')->name('communes.show');
// returns the form for editing a commune

Route::get('/communes/{commune}/edit', CommuneController::class .'@edit')->name('communes.edit');

// updates a commune
Route::put('/communes/{commune}', CommuneController::class .'@update')->name('communes.update');

// deletes a commune
Route::delete('/communes/{commune}', CommuneController::class .'@destroy')->name('communes.destroy');


Route::view('/bobo', 'includes.layout');;