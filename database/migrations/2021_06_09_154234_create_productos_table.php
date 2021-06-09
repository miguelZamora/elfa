<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');


            $table->string('codigo_int');
            $table->string('codigo_ext');
            $table->string('nombre');
            $table->string('stock');
            $table->string('imagen_1');
            $table->string('imagen_2');
            $table->string('imagen_3');
            $table->string('imagen_4');
            $table->string('imagen_5');

            $table->decimal('precio_venta',12,2);
            $table->enum('status',['ACTIVE','INACTIVE'])->on('ACTIVE');







            // relacion entre la tabla productos y categorias llaves foraneas
            $table->unsignedBigInteger('categoria_id');
            $table->foreign('categoria_id')->references('id')->on('categorias');
            // relacion entre la tabla productos y proveedores 
            $table->unsignedBigInteger('proveedore_id');
            $table->foreign('proveedore_id')->references('id')->on('proveedores');




            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
