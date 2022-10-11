<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\servico;
use App\Http\Requests\ServicoRequest;

class ServicosController extends Controller
{
    public function index(){
        $servicos = servico::All();
        return view('servicos.index', ['servicos'=>$servicos ]);
    }

    public function create() {
        return view('servicos.create');
    }

    public function store(ServicoRequest $request){
        $novo_servico = $request->all();
        Servico::create($novo_servico);

        return redirect('servicos');
    }
}
