<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    use HasFactory;
    protected $table = "servicos";
    protected $fillable = ['valor_servico','nome_cliente','descricao_servico','observação_servico','dt_servico'];
}
