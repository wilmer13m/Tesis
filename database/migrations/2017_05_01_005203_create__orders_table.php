<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //tabla de ordenes
        Schema::create('orders',function(Blueprint $table){
            $table->increments('id');
            $table->integer('id_client');
            $table->integer('id_detail_order');
            $table->integer('id_origin');
            $table->integer('id_user');
            $table->date('fecha_orden');
            $table->string('hora');
            $table->integer('id_room');
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
        Schema::drop('orders');

    }
}
