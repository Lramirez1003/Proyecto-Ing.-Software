<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use RealRashid\SweetAlert\Facades\Alert;
use Auth;


class ClienteController extends Controller
{
    //

    public function create(Request $request)
    {
        $Nombre=$request['Nombre'];
        $Telefono=$request['Telefono'];
        $Licencia=$request['Licencia'];
        $Email=$request['Email'];


        $cliente=new Cliente();

        $cliente->Nombre=$Nombre;
        $cliente->Telefono=$Telefono;
        $cliente->Licencia=$Licencia;
        $cliente->Email=$Email;


        $cliente->save();

        return redirect()->back()->withSuccessMessage('Agregado satisfactoriamente');
    }

    public function index()
    {
        if (Auth::guest())
        {
            return redirect()->route('home');
        }


        $clientes=Cliente::all();

        if (session('success_message')){
            Alert::success('Agregado :)',session('success_message'));
        }
        


    return view('admin.clientes.index',['clientes'=>$clientes]/*,compact('clientes')*/);
    }

    public function edit($cliente_id)
    {
        if (Auth::guest())
        {
            return redirect()->route('home');
        }

        $cliente = Cliente::findOrFail($cliente_id);
        return view('admin.clientes.edit',[
            "cliente" => $cliente
        ]);
    }

        // Método para actualzar el cliente

        public function update($cliente_id)
        {
            $cliente = Cliente::findOrFail($cliente_id);
            $cliente->Nombre = request()->input("Nombre");
            $cliente->Telefono = request()->input("Telefono");
            $cliente->Licencia = request()->input("Licencia");
            $cliente->Email = request()->input("Email");

            $cliente->update();

            return redirect()->route("clientes.index");
        }

        // Método para borrar el cliente

        public function destroy($cliente_id)
        {
            Cliente::destroy($cliente_id);

            return redirect()->route("clientes.index");
        }
}

