<?php

namespace App\Http\Requests\Categorias;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
                            'nombre'        => 'required|string|max:50',
                            'descripcion'   => 'nullable|string|max:250',
                    //
                ];
    }


    public function message()
    {
        return [
                    'nombre.required'       => 'Este campo es requerido'                        ,
                    'nombre.string'         => 'El valor no es correcto deben ser solo Letras'  ,
                    'nombre.max'            => 'Largo maximo es de 50 caracteres'               ,
                    'descripcion.string'    => 'El valor no es correcto deben ser solo Letras'  ,
                    'descripcion.max'       => 'Largo maximo es de 250 caracteres'              , 
                ]
    }
}
