<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FolhaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {      
    	$folhas = \App\Folha::paginate(5);
    	 
    	
       // dd($empresas);
    	return view('folha.index', compact('folhas'));
    }
}