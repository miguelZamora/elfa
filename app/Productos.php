<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    //
    protected $fillable = [ 'codigo_int' , 
                            'codigo_ext',
                            'nombre',
                            'stock',
                            'imagen_1',
                            'imagen_2',
                            'imagen_3',
                            'imagen_4',
                            'imagen_5',
                            'precio_venta',
                            'status',
                            'categoria_id',
                            'proveedore_id', ];

    public function categorias()
    {
        return $this->belongsTo(Categoria::class);
    }
    public function proveedores()
    {
        return $this->belongsTo(Proveedores::class);
    }

}
