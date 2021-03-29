<?php

namespace App\Http\Controllers;

use App\Models\vehiculos;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Auth;


class VehiculosController extends Controller
{
    // Método para crear el vehiculo
    public function create(Request $request)
    {
        $Nombre=$request['Nombre'];
        $Tipo=$request['Tipo'];
        $Precio=$request['Precio'];
        $N_pasajeros=$request['N_pasajeros'];
        $FotoName=$request->file('image')->getClientOriginalName();
        $size=$request->file('image')->getSize();

        $request->file('image')->storeAs('public/images/',$FotoName);

        $vehiculo=new vehiculos();

        $vehiculo->Nombre=$Nombre;
        $vehiculo->Tipo=$Tipo;
        $vehiculo->Precio=$Precio;
        $vehiculo->N_pasajeros=$N_pasajeros;
        $vehiculo->FotoName=$FotoName;
        $vehiculo->size=$size;

        $vehiculo->save();

        return redirect()->back()->withSuccessMessage('Successfully added');
    }

    // Método para mostrar el vehiculo

    public function index()
    {
        if (Auth::guest())
        {
            return redirect()->route('home');
        }


        $vehiculoss=vehiculos::all();

        if (session('success_message')){
            Alert::success('Agregado :)',session('success_message'));
        }
        


        return view('admin.vehiculos.index',['vehiculoss'=>$vehiculoss],compact('vehiculoss'));
    }

    // Método para redireccionar a la pagina para editar el vehiculo

    public function edit($vehiculo_id)
    {
        if (Auth::guest())
        {
            return redirect()->route('home');
        }

        $vehiculo = vehiculos::findOrFail($vehiculo_id);
        return view('admin.vehiculos.edit',[
            "vehiculo" => $vehiculo
        ]);
    }

        // Método para actualzar el vehiculo

        public function update($vehiculo_id)
        {
            $vehiculo = vehiculos::findOrFail($vehiculo_id);
            $vehiculo->Nombre = request()->input("Nombre");
            $vehiculo->Tipo = request()->input("Tipo");
            $vehiculo->Precio = request()->input("Precio");
            $vehiculo->N_pasajeros = request()->input("N_pasajeros");

            $vehiculo->update();

            return redirect()->route("vehiculos.index");
        }

        // Método para borrar el vehiculo

        public function destroy($vehiculo_id)
        {
            vehiculos::destroy($vehiculo_id);

            return redirect()->route("vehiculos.index");
        }
}

