<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Clientes_HabitualesFormRequest extends FormRequest
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
            'Nombre'=>'required|max:30',
            'HoraAproximada'=>'required|max:5',
            'Edad'=>'required|min:2',
        ];
    }
}
