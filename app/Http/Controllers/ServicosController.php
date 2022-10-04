<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servico;

class ServicosController extends Controller
{
    public function index(){
        $servicos = servico::All();
        return view('servicos', ['servicos'=>$servicos ]);
    }
}
