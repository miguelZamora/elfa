<?php

namespace App\Http\Requests\Productos;

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
        //
        return [
                'codigo_int', 'nombre', 'stock', 'precio_venta', 'status', 'categoria_id', 'proveedore_id', }
}
