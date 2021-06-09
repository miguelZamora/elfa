<?php

namespace App\Http\Requests\Proveedores;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
                    'nombre'        => 'required|string|max:150|unique:proveedores'    ,    
                    'email'         => 'required|string|max:250|unique:proveedores'    ,    
                    'direccion'     => 'required|string|max:250'                       ,
                    'telefono'      => 'required|string|max:16|min:9'                  ,
                ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function message()
    {
        return [    
        'nombre.required'     => 'Este campo es requerido',
        'nombre.string'       => 'El valor no es correcto deben ser solo Letras' ,
        'nombre.max'          => 'Largo maximo es de 150 caracteres' ,
        'nombre.unique'       => 'Ya se encuentra registrado ese nombre' ,

        'email.required'      => 'Este campo es requerido',
        'email.string'        => ' El valor deben ser alfanumerico y no debe comenzar por un numero',
        'email.max'           => 'Largo maximo es de 250 caracteres',
        'email.unique'        => 'Ya se encuentra registrado ese email' ,

        'direccion.required'  => 'Este campo es requerido',
        'direccion.max'       => 'Largo maximo es de 250 caracteres',
        
        'telefono.required'   => 'Este campo es requerido',
        'telefono.max'        => 'Largo maximo es de 16 caracteres',    ];
    }    
}
