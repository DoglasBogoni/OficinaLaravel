<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conta;
use App\Http\Requests\ContaRequest;

class ContasController extends Controller
{
    public function index(){
        $contas = Conta::All();
        return view('contas.index', ['contas'=>$contas ]);
    }

    public function create() {
        return view('contas.create');
    }

    public function store(ContaRequest $request){
        $novo_conta = $request->all();
        Conta::create($novo_conta);

        return redirect('contas');
    }
}
