<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\ClipperVacationsController;
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


Route::get('/cvapp', 'ClipperVacationsController@index');
Route::post('/cvapp/store', 'ClipperVacationsController@store');
Route::get('/cvapp/create', 'ClipperVacationsController@create');
Route::post('/cvapp/create', 'ClipperVacationsController@create');
Route::get('/cvapp/{id}/edit', 'ClipperVacationsController@edit');
Route::post('/cvapp/{id}/update', 'ClipperVacationsController@update');
Route::get('/cvapp/{id}/destroy', 'ClipperVacationsController@destroy');