<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;
use App\Http\Requests\FornecedorRequest;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores = Fornecedor::All();
        return view('fornecedores.index', ['fornecedores'=>$fornecedores ]);
    }
    public function create() {
        return view('fornecedores.create');
    }

    public function store(FornecedorRequest $request){
        $novo_fornecedor = $request->all();
        Fornecedor::create($novo_fornecedor);

        return redirect('fornecedores');
    }
}
