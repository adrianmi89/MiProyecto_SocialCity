<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FavoritosFormRequest extends FormRequest
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
            'Nombre'=>'required|max:50',
            'Direccion'=>'required|max:50',
            'Puntuacion'=>'required|3',
            'Telefono'=>'required|9',
        ];
    }
}
