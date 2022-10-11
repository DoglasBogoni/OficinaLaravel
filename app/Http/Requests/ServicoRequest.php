<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServicoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'valor_servico'=>'required',
            'nome_cliente'=>'required|min:3',
            'descricao_servico'=>'required|min:3',
            'observação_servico'=>'required|min:3',
            'dt_servico'=>'date',
        ];
    }
}
