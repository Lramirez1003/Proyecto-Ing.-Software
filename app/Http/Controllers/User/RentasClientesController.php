<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRentaRequest;
use App\Models\vehiculos;
use App\Models\User;
use App\Models\RentaCliente;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Mail;
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

        $renta = new RentaCliente();
        $renta->user= $request->input('user_id');
        $renta->vehiculo= $request->input('vehiculo_id');
        
        $renta->total_de_dias=$request->input('total_de_dias');
        $renta->precio_total= $renta->total_de_dias * vehiculos::where('id',$renta->vehiculo)->pluck('precio')->first();
        $renta->fecha_inicio= $request->input('fecha_inicio');
        $renta->fecha_fin= $request->input('fecha_fin');
        vehiculos::where('id',$renta->vehiculo)->increment('veces_rentado');
        vehiculos::where('id',$renta->vehiculo)->update(['estado' => false]);
        $renta->save();

                // email data
                $email_data = array(
                    'name' => Auth::user()->name,
                    'email' => Auth::user()->email,
                    'rent'=> vehiculos::where('id',$renta->vehiculo)->pluck('Nombre')->first(),
                    'prec'=> RentaCliente::where('precio_total',$renta->precio_total)->pluck('precio_total')->first(),
                    'fechasalida'=> RentaCliente::where('fecha_inicio',$renta->fecha_inicio)->pluck('fecha_inicio')->first(),
                    'fechaentrega'=> RentaCliente::where('fecha_fin',$renta->fecha_fin)->pluck('fecha_fin')->first(),
                );
        
                // send email with the template
                Mail::send('renta_mail', $email_data, function ($message) use ($email_data) {
                    $message->to($email_data['email'], $email_data['name'])
                        ->subject('Gracias por tu renta!')
                        ->from('urenarentcar@gmail.com', 'Victor Ureña');
                });

        
        return redirect()->route('homec.index')->withSuccessMessage('Comunicate con nosotros para confirmar'); 
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
    public function edit(RentaCliente $renta)
    {
        
        $vehiculos = Vehiculos::all();
        $put=True;
        
        return view('user.rentas.edit')->with([
            'renta'=>$renta,
            'vehiculos'=>$vehiculos,
            'put'=>$put,
            
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RentaCliente $renta)
    {
        $renta->fecha_inicio= $request->input('fecha_inicio');
        $renta->fecha_fin= $request->input('fecha_fin');
        //$renta->precio_total=$request->input('precio_total');
        $renta->total_de_dias=$request->input('total_de_dias');
        $renta->save();

        return redirect()->route('rentas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(RentaCliente $renta)
    {
        $renta->vehiculo->update(['estado' => true]);
        $renta->delete();

        return back();
    }
}
