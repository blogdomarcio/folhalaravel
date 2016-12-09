<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeriodoController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {      
    	$peridos = \App\Periodo::paginate(5);
    	 
    	
       // dd($empresas);
    	return view('periodo.index', compact('periodoss'));
    }
}
