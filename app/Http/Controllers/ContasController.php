<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conta;

class ContasController extends Controller
{
    public function index(){
        $contas = Conta::All();
        return view('contas', ['contas'=>$contas ]);
    }
}
