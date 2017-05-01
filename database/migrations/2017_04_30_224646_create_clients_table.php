<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //tabla de clientes
        Schema::create('clients',function(Blueprint $table){
            $table->increments('id');
            $table->string('nombre');
            $table->string('cedula');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('string');
            $table->integer('edad');
            $table->string('profesion');
            $table->string('estado_civil');
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
        //
        Schema::drop('clients');

    }
}
