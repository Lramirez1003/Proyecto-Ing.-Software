<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRentaRequest;
use App\Models\vehiculos;
use App\Models\User;
use App\Models\RentaCliente;
use RealRashid\SweetAlert\Facades\Alert;
use Auth;

class RentasClientesController extends Controller
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
            return redirect()->route('login');
        }

        if (session('success_message')){
            Alert::success('Renta agregada',session('success_message'));
        }

        #$rentas=Renta::all();
        $rentasC=RentaCliente::with(['user','vehiculo'])->get();
        return view('user.rentas.index',compact('rentasC'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {
        if (Auth::guest())
        {
            return redirect()->route('home');
        }

       
        $vehiculos = Vehiculos::all();
        $action=route('rentaC.store');

        return view('user.rentas.create', compact('vehiculos','action'))->with([
            'user'=>$user
        ]);
        
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

        $renta= new RentaCliente();
        $renta->user= $request->input('user_id');
        $renta->vehiculo= $request->input('vehiculo_id');
        $renta->precio_total=$request->input('precio_total');
        $renta->fecha_inicio= $request->input('fecha_inicio');
        $renta->fecha_fin= $request->input('fecha_fin');

        $renta->save();


        
        return redirect()->route('rentasC.index')->withSuccessMessage('Agregada satisfactoriamente'); 
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
        $renta=RentaCliente::find($id);
        $clientes = Cliente::all();
        $vehiculos = Vehiculos::all();
        $put=True;
        $action= route('rentaC.update',['id'=>$id]);

        return view('user.renta.edit',compact('renta', 'clientes','vehiculos', 'put', 'action') );
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
        RentaCliente::destroy($id);

        return back();
    }
}
