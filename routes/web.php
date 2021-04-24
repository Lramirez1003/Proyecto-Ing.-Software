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
Route::get('/EnviarCorreo',  [
        'uses'=>'App\Http\Controllers\User\SendEmailController@index',
        'as'=>'email.index'
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
        ])->middleware('can:manage-users');
    //Welcome del usuario logeado
    Route::get('/Bienvenido',[
        'uses'=>'App\Http\Controllers\User\HomeController@index',
        'as'=>'homec.index'

    ]);
    Route::get('/Explorar',[
        'uses'=>'App\Http\Controllers\User\ExplorarController@index',
        'as'=>'explorar.index'

    ]);

    Route::resource('Ajustes', 'App\Http\Controllers\User\AjustesController',['except'=>['show','create','store']]); 

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('can:manage-users')->name('home');

//Usuarios

Route::resource('users', 'App\Http\Controllers\UsersController',['except'=>['show','create','store']])->middleware('can:manage-users');



//Vehiculos

Route::get('/vehiculos', [
    'uses'=>'App\Http\Controllers\VehiculosController@index',
    'as'=>'vehiculos.index'
])->middleware('can:manage-users');

Route::post('/create',[
    'uses'=>'App\Http\Controllers\VehiculosController@create',
    'as'=>'vehiculos.create'
])->middleware('can:manage-users');

Route::get('/vehiculos/{vehiculo}/edit',[
    'uses'=>'App\Http\Controllers\VehiculosController@edit',
    'as'=>'vehiculos.edit'
])->middleware('can:manage-users');

Route::post('/vehiculos/{vehiculo}',[
    'uses'=>'App\Http\Controllers\VehiculosController@update',
    'as'=>'vehiculos.update'
])->middleware('can:manage-users');

Route::delete('/vehiculos/{vehiculo}',[
    'uses'=>'App\Http\Controllers\VehiculosController@destroy',
    'as'=>'vehiculos.delete'
])->middleware('can:manage-users');



//Cliente
Route::get('/Clientes', [
    'uses'=>'App\Http\Controllers\ClienteController@index',
    'as'=>'clientes.index'
])->middleware('can:manage-users');


Route::post('/Agregar cliente',[
    'uses'=>'App\Http\Controllers\ClienteController@create',
    'as'=>'cliente.create'
])->middleware('can:manage-users');

Route::get('/Cliente/{cliente}/edit',[
    'uses'=>'App\Http\Controllers\ClienteController@edit',
    'as'=>'cliente.edit'
])->middleware('can:manage-users');

Route::post('/Cliente/{cliente}',[
    'uses'=>'App\Http\Controllers\ClienteController@update',
    'as'=>'cliente.update'
])->middleware('can:manage-users');

Route::delete('/Cliente/{cliente}',[
    'uses'=>'App\Http\Controllers\ClienteController@destroy',
    'as'=>'cliente.delete'
])->middleware('can:manage-users');



//Renta

#Route::resource('renta','RentasController');

Route::get('/Rentas', [
    'uses'=>'App\Http\Controllers\RentasController@index',
    'as'=>'rentas.index'
])->middleware('can:manage-users');


Route::get('/AgregarRenta',[
    'uses'=>'App\Http\Controllers\RentasController@create',
    'as'=>'renta.create'
])->middleware('can:manage-users');

Route::post('/pruebaStore',[
    'uses'=>'App\Http\Controllers\RentasController@store',
    'as'=>'renta.store'
])->middleware('can:manage-users');

Route::get('/Renta/{renta}/edit',[
    'uses'=>'App\Http\Controllers\RentasController@edit',
    'as'=>'renta.edit'
])->middleware('can:manage-users');

Route::put('/Renta/{renta}',[
    'uses'=>'App\Http\Controllers\RentasController@update',
    'as'=>'renta.update'
])->middleware('can:manage-users');

Route::delete('/Renta/{renta}',[
    'uses'=>'App\Http\Controllers\RentasController@destroy',
    'as'=>'renta.delete'
])->middleware('can:manage-users');

// RENTAS CLIENTEES
Route::get('/TusRentas', [
    'uses'=>'App\Http\Controllers\User\RentasClientesController@index',
    'as'=>'rentasC.index'
]);


Route::get('/AgregaRenta',[
    'uses'=>'App\Http\Controllers\User\RentasClientesController@create',
    'as'=>'rentaC.create'
]);

Route::post('/rentaStore',[
    'uses'=>'App\Http\Controllers\User\RentasClientesController@store',
    'as'=>'rentaC.store'
]);

Route::get('/TuRenta/{renta}/edit',[
    'uses'=>'App\Http\Controllers\User\RentasClientesController@edit',
    'as'=>'rentaC.edit'
]);

Route::put('/TuRenta/{renta}',[
    'uses'=>'App\Http\Controllers\User\RentasClientesController@update',
    'as'=>'rentaC.update'
]);

Route::delete('/TuRenta/{renta}',[
    'uses'=>'App\Http\Controllers\User\RentasClientesController@destroy',
    'as'=>'rentaC.delete'
]);