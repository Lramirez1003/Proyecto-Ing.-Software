<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Learn extends Controller
{
    public function index()
    {
        return view('learn');
    }
}

