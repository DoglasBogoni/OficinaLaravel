<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClientesController extends Controller
{
    public function index(){
        $clientes = Cliente::All();
        return view('clientes', ['clientes'=>$clientes ]);
    }
}
