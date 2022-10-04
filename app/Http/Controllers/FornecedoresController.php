<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fornecedor;

class FornecedoresController extends Controller
{
    public function index(){
        $fornecedores = Fornecedor::All();
        return view('fornecedores', ['fornecedores'=>$fornecedores ]);
    }
}
