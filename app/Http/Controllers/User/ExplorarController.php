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
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::guest())
        {
            return redirect()->route('/');
        }


        $vehiculoss=vehiculos::all();

        return view('user.explorar',['vehiculoss'=> $vehiculoss]);
    }
}
