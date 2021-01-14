<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FilmoviController;
use Illuminate\Support\Facades\DB;




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
    return view('index');
});

Route::get('/unos', 'App\Http\Controllers\FilmoviController@zanr')->name('unos');

Route::post('/noviunos', 'App\Http\Controllers\FilmoviController@store')->name('noviunos');


Route::delete('/filmovis/{id}', 'App\Http\Controllers\FilmoviController@destroy')->name('film.destroy'); 


// Route::post('/filmdel/{id}', 'App\Http\Controllers\FilmoviController@destroy')->name('brisanje');
