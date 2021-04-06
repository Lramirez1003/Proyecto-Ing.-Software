<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreRentaRequest;
use App\Models\Renta;
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
        #$rentas=Renta::all();
        $rentas=Renta::with(['cliente','vehiculo'])->get();
        return view('admin.rentas.index',compact('rentas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $renta->fecha_inicio= $request->input('fecha_inicio');
        $renta->fecha_fin= $request->input('fecha_fin');

        $renta->save();
        #opcion 2
        #$renta = new Renta($request->input());
        #$renta = new Renta();
        #$renta->cliente=$request->input('cliente_id');
        #$renta->vehiculo=$request->input('vehiculo_id');

        
        return redirect()->route('rentas.index'); 
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
