<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peca;
use App\Http\Requests\PecaRequest;

class PecasController extends Controller
{
    public function index(){
        $pecas = peca::All();
        return view('pecas.index', ['pecas'=>$pecas ]);
    }

    public function create() {
        return view('pecas.create');
    }

    public function store(PecaRequest $request){
        $novo_peca = $request->all();
        Peca::create($novo_peca);

        return redirect('pecas');
    }
}
