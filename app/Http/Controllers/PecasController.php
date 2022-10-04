<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peca;
class PecasController extends Controller
{
    public function index(){
        $pecas = peca::All();
        return view('pecas', ['pecas'=>$pecas ]);
    }
}
