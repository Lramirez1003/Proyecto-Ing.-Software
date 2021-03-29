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

Route::get('/vehiculos/{vehiculo}/edit',[
    'uses'=>'App\Http\Controllers\VehiculosController@edit',
    'as'=>'vehiculos.edit'
]);

Route::post('/vehiculos/{vehiculo}',[
    'uses'=>'App\Http\Controllers\VehiculosController@update',
    'as'=>'vehiculos.update'
]);

Route::delete('/vehiculos/{vehiculo}',[
    'uses'=>'App\Http\Controllers\VehiculosController@destroy',
    'as'=>'vehiculos.delete'
]);

Route::get('/clientes', [
    'uses'=>'App\Http\Controllers\ClienteController@index',
    'as'=>'clientes.index'
]);

Route::post('/Agregar cliente',[
    'uses'=>'App\Http\Controllers\ClienteController@create',
    'as'=>'cliente.create'
]);

Route::get('/cliente/{cliente}/edit',[
    'uses'=>'App\Http\Controllers\ClienteController@edit',
    'as'=>'cliente.edit'
]);

Route::post('/cliente/{cliente}',[
    'uses'=>'App\Http\Controllers\ClienteController@update',
    'as'=>'cliente.update'
]);

Route::delete('/cliente/{cliente}',[
    'uses'=>'App\Http\Controllers\ClienteController@destroy',
    'as'=>'cliente.delete'
]);