<?php

namespace App\Http\Controllers;

use App\Models\vehiculos;
use Illuminate\Http\Request;

use Auth;

class WelcomeController extends Controller
{
public function index()
    {
      $vehiculoss=vehiculos::all();

        return view('welcome',['vehiculoss'=> $vehiculoss]);
    }
}