<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PecaRequest extends FormRequest
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
            'nome_peca'=>'required|min:3',
            'valor_peca'=>'required',
            'fabricante_peca'=>'required|min:3',
            'nome_fornecedor'=>'required|min:3',
            'nome_cliente'=>'required|min:3',
        ];
    }
}
