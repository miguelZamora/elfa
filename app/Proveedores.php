<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedores extends Model
{
    //
    protected $fillable = ['nombre', 'email', 'direccion', 'telefono', ];

    public function productos()
    {
        return $this->hasMany(Productos::class);
    }

}
