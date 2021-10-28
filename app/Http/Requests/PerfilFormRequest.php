<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PerfilFormRequest extends FormRequest
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
            'ID'=>'required',
            'Sexo'=>'required|max:6',
            'Edad'=>'required|2',
            'EstadoCivil'=>'required|min:20',
            'RamaProfesional'=>'required|max:45',
            'Intereses'=>'required|max:100',
        ];
    }
}
