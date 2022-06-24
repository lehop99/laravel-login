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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('samp08','Samp08Controller@index');
// Route::get('kad08','Kad08Controller@index');

//Route::get('/samp08', [Samp08Controller::class, 'index']);

Route::get('/samp08', 'App\Http\Controllers\Samp08Controller@index');
Route::get('/kad08', 'App\Http\Controllers\Kad08Controller@index');
Route::group(['prefix' => 'kad09', 'middleware' => 'web'], function (){
    Route::get('/','App\Http\Controllers\Kad09Controller@index');
    Route::post('/','App\Http\Controllers\Kad09Controller@post');
 });