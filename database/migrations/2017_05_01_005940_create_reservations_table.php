<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //tabla de reservaciones
        Schema::create('reservations',function(Blueprint $table){
            $table->increments('id');
            $table->date('fecha creacion');
            $table->date('inicio_reservacion');
            $table->date('fin_resservacion');
            $table->integer('id_client');
            $table->integer('id_user');
            $table->integer('id_room');
            $table->string('estado_reservacion');
            $table->string('numero_orden');
            $table->string('estatus');
            $table->float('gravado');
            $table->string('iva');
            $table->float('total');
            //$table->integer('id_reservation');
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
        Schema::drop('reservations');


    }
}
