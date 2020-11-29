<?php

use App\Http\Composers\HelloComposer;
use App\Http\Controllers\HelloContoroller;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\HelloMiddleware;

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




Route::get('hello', 'App\Http\Controllers\HelloContoroller@index');
Route::post('hello', 'App\Http\Controllers\HelloContoroller@post');
Route::get ('hello/add','App\Http\Controllers\HelloContoroller@add');
Route::post ('hello/add','App\Http\Controllers\HelloContoroller@create');
Route::get ('hello/edit','App\Http\Controllers\HelloContoroller@edit');
Route::post ('hello/edit','App\Http\Controllers\HelloContoroller@update');
Route::get ('hello/del','App\Http\Controllers\HelloContoroller@del');
Route::post ('hello/del','App\Http\Controllers\HelloContoroller@remove');
Route::get ('hello/show','App\Http\Controllers\HelloContoroller@show');
