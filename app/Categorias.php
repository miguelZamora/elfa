<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    //
    protected $fillable = [ 'nombre' , 'descripcion' , ];


    public function productos()
    {
        return $this->hasMany(Productos::class);
    }


}
