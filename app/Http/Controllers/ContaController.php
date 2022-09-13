<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContaController extends Controller
{
    public function index(){
        $nomeconta = "Troca de pneu";
        return view('conta', ['Nome da Conta'=>$nomeconta ]);
    }
}
