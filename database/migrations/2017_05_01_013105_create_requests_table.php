<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //tabla de peticiones de cliente
        Schema::create('requests',function(Blueprint $table){

            $table->increments('id');
            $table->string('descripcion');
            $table->date('fecha');
            $table->string('hora');
            $table->integer('id_client');
            $table->integer('id_room');
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
        Schema::drop('requests');

    }
}
