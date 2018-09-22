<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LivrosRequest extends FormRequest
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
          'nome' => 'required|max:100',
          'preco' => 'required|numeric',
          'descricao' => 'required|max:255',
          'ISBN' => 'required|max:255',
          'taxaImpressao' => 'required|max:255',
          'waterMark' => 'required|max:255',


        ];
    }
    public function messages()
    {
      return [
          'required' => 'O :attribute é obrigatório',
      ];
  }
}
