<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\vehiculos;
use Auth;

class ExplorarController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $vehiculoss=vehiculos::all();

        return view('user.explorar',['vehiculoss'=> $vehiculoss]);
    }
}
