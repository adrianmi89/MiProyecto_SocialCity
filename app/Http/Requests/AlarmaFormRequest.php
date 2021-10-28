<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlarmaFormRequest extends FormRequest
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
            'N.Alarma'=>'required',
            'Nombre'=>'required|max:100',
            'Fecha'=>'required|max:10',
            'Hora'=>'required|max:5',
            'Descripcion'=>'required|max:1000',
        ];
    }
}
