<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreRentaRequest;
use App\Models\Renta;
use App\Models\RentaCliente;
use App\Models\vehiculos;
use App\Models\Cliente;
use RealRashid\SweetAlert\Facades\Alert;
use Auth;

class RentasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::guest())
        {
            return redirect()->route('home');
        }

        if (session('success_message')){
            Alert::success('Renta agregada',session('success_message'));
        }

        #$rentas=Renta::all();
        $rentas=Renta::with(['cliente','vehiculo'])->get();
        $rentasC=RentaCliente::with(['user','vehiculo'])->get();
        return view('admin.rentas.index',compact('rentas','rentasC'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::guest())
        {
            return redirect()->route('home');
        }

        $clientes = Cliente::all();
        $vehiculos = Vehiculos::all();
        $action=route('renta.store');

        return view('admin.rentas.create', compact('clientes','vehiculos','action'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       #opcion 1

        $renta= new Renta();
        $renta->cliente= $request->input('cliente_id');
        $renta->vehiculo= $request->input('vehiculo_id');
        $renta->precio_total=$request->input('precio_total');
        $renta->fecha_inicio= $request->input('fecha_inicio');
        $renta->fecha_fin= $request->input('fecha_fin');

        $renta->save();


        
        return redirect()->route('rentas.index')->withSuccessMessage('Agregada satisfactoriamente'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $renta=Renta::find($id);
        $clientes = Cliente::all();
        $vehiculos = Vehiculos::all();
        $put=True;
        $action= route('renta.update',['id'=>$id]);

        return view('admin.renta.edit',compact('renta', 'clientes','vehiculos', 'put', 'action') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $renta = Renta::find($id);
        $renta->fecha_inicio= $request->input('fecha_inicio');
        $renta->fecha_fin= $request->input('fecha_fin');
        $renta->precio_total=$request->input('precio_total');
        $renta->update();

        return redirect()->route('renta.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Renta::destroy($id);

        return back();
    }
}
