<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaintenanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //tabla de control de mantenimiento
        Schema::create('maintenances',function(Blueprint $table){

            $table->increments('id');
            $table->string('ejecutor');
            $table->string('estatus');
            $table->date('fecha_emision');
            $table->string('hora_emision');
            $table->date('fecha_ejecucion');
            $table->string('hora_ejecucion');
            $table->integer('id_location');
            $table->text('descripcion_mant');
            $table->integer('prioridad');
            $table->integer('id_user');
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
        Schema::drop('maintenances');

    }
}
