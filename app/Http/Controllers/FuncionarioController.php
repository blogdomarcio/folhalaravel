<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {      
    	$funcionarios = \App\Funcionario::paginate(5);
    	 
    	
       // dd($empresas);
    	return view('funcionario.index', compact('funcionarios'));
    }
}
