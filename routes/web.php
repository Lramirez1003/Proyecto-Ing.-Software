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

Route::get('/',  [
    'uses'=>'App\Http\Controllers\WelcomeController@index',
    'as'=>'welcome.index'
    ]);

    //About us \ Nosotros
Route::get('/Nosotros',[
    'uses'=>'App\Http\Controllers\AboutUsController@index',
    'as'=>'AboutUs.index'
    ]);
    //  Learn \ Aprender
Route::get('/Aprender',[
        'uses'=>'App\Http\Controllers\LearnController@index',
        'as'=>'Learn.index'
        ]);

    //  Learn \ Aprender
    Route::get('/Calendario',[
        'uses'=>'App\Http\Controllers\CalendarioController@index',
        'as'=>'Calendario.index'
        ]);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Vehiculos

Route::get('/vehiculos', [
    'uses'=>'App\Http\Controllers\VehiculosController@index',
    'as'=>'vehiculos.index'
]);

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

//Cliente
Route::get('/Clientes', [
    'uses'=>'App\Http\Controllers\ClienteController@index',
    'as'=>'clientes.index'
]);


Route::post('/Agregar cliente',[
    'uses'=>'App\Http\Controllers\ClienteController@create',
    'as'=>'cliente.create'
]);

Route::get('/Cliente/{cliente}/edit',[
    'uses'=>'App\Http\Controllers\ClienteController@edit',
    'as'=>'cliente.edit'
]);

Route::post('/Cliente/{cliente}',[
    'uses'=>'App\Http\Controllers\ClienteController@update',
    'as'=>'cliente.update'
]);

Route::delete('/Cliente/{cliente}',[
    'uses'=>'App\Http\Controllers\ClienteController@destroy',
    'as'=>'cliente.delete'
]);

//Renta

#Route::resource('renta','RentasController');

Route::get('/Rentas', [
    'uses'=>'App\Http\Controllers\RentasController@index',
    'as'=>'rentas.index'
]);


Route::get('/AgregarRenta',[
    'uses'=>'App\Http\Controllers\RentasController@create',
    'as'=>'renta.create'
]);

Route::post('/pruebaStore',[
    'uses'=>'App\Http\Controllers\RentasController@store',
    'as'=>'renta.store'
]);

Route::get('/Renta/{renta}/edit',[
    'uses'=>'App\Http\Controllers\RentasController@edit',
    'as'=>'renta.edit'
]);

Route::post('/Renta/{renta}',[
    'uses'=>'App\Http\Controllers\RentasController@update',
    'as'=>'renta.update'
]);

Route::delete('/Renta/{renta}',[
    'uses'=>'App\Http\Controllers\RentasController@destroy',
    'as'=>'renta.delete'
]);


