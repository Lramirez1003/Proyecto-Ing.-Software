<?php
use App\Https\Controllers;
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

Route::get('/vehiculos', [
    'uses'=>'App\Http\Controllers\VehiculosController@index',
    'as'=>'vehiculos.index'
]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/create',[
    'uses'=>'App\Http\Controllers\VehiculosController@create',
    'as'=>'vehiculos.create'
]);

Route::get('/vehiculoss/{vehiculo}/edit',[
    'uses'=>'App\Http\Controllers\VehiculosController@edit',
    'as'=>'vehiculos.edit'
]);

Route::post('/vehiculoss/{vehiculo}',[
    'uses'=>'App\Http\Controllers\VehiculosController@update',
    'as'=>'vehiculos.update'
]);

Route::delete('/vehiculoss/{vehiculo}',[
    'uses'=>'App\Http\Controllers\VehiculosController@destroy',
    'as'=>'vehiculos.delete'
]);