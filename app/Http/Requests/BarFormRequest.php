<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BarFormRequest extends FormRequest
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
            'Nombre'=>'required|max:50',
            'Capacidad'=>'required|max:30',
            'Ocupacion'=>'required|max:30',
            'Puntuacion'=>'required|max:3',
            'Horario'=>'required|max:1000',
        ];
    }
}
