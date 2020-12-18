<?php

use App\Http\Composers\HelloComposer;
use App\Http\Controllers\HelloContoroller;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\HelloMiddleware;
use Monolog\Processor\WebProcessor;

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
Route::get('reoo', 'App\Http\Controllers\HelloContoroller@index');


Route::post('hello', 'App\Http\Controllers\HelloContoroller@post');
Route::get ('hello/add','App\Http\Controllers\HelloContoroller@add');
Route::post ('hello/add','App\Http\Controllers\HelloContoroller@create');
Route::get ('hello/edit','App\Http\Controllers\HelloContoroller@edit');
Route::post ('hello/edit','App\Http\Controllers\HelloContoroller@update');
Route::get ('hello/del','App\Http\Controllers\HelloContoroller@del');
Route::post ('hello/del','App\Http\Controllers\HelloContoroller@remove');
Route::get ('hello/show','App\Http\Controllers\HelloContoroller@show');
Route::get ('person','App\Http\Controllers\PersonController@index');
Route::get ('person/find','App\Http\Controllers\PersonController@find');
Route::post ('person/find','App\Http\Controllers\PersonController@search');
Route::get ('person/add','App\Http\Controllers\PersonController@add');
Route::post ('person/add','App\Http\Controllers\PersonController@create');

Route::get ('person/edit','App\Http\Controllers\PersonController@edit');
Route::post ('person/edit','App\Http\Controllers\PersonController@update');

Route::get ('person/del','App\Http\Controllers\PersonController@delete');
Route::post ('person/del','App\Http\Controllers\PersonController@remove');
Route::get ('board','App\Http\Controllers\BoardController@index');
Route::get ('board/add','App\Http\Controllers\BoardController@add');
Route::post ('board/add','App\Http\Controllers\BoardController@create');
Route::resource('rest','App\Http\Controllers\RestappController');

Route::get('hello/rest','App\Http\Controllers\HelloContoroller@rest');
Route::get('hello/session','App\Http\Controllers\HelloContoroller@ses_get');
Route::post('hello/session','App\Http\Controllers\HelloContoroller@ses_put');
Route::get('hello/auth','App\Http\Controllers\HelloContoroller@getAuth');
Route::post('hello/auth','App\Http\Controllers\HelloContoroller@postAuth');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
