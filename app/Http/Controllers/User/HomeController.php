<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Controller;
use Auth;

class HomeController extends Controller
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

        if (session('success_message')){
            Alert::success('Renta agregada',session('success_message'));
        }

        return view('user.home');
    }
}
