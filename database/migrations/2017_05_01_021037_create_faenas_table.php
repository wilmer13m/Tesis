<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFaenasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //tabla de faenas
        Schema::create('faenas',function(Blueprint $table){

            $table->increments('id');
            $table->string('nombre');
            $table->integer('cantidad');
            $table->integer('id_price');
            $table->integer('cantidad_min');
            $table->integer('id_aliquot');
            $table->float('costo');
            $table->integer('id_type');
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
        Schema::drop('faenas');

    }
}
