<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peca extends Model
{
    use HasFactory;
    protected $table = "pecas";
    protected $fillable = ['nome_peca','valor_peca','fabricante_peca','nome_fornecedor','nome_cliente'];
}
