<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('detail',function(Blueprint $table){
            $table->increments('id');
            $table->integer('id_order');
            $table->integer('cantidad_prod');
            $table->string('descripcion_prod');
            $table->float('gravado_orden');
            $table->float('total');
            $table->float('impuesto');

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
        Schema::drop('detail');

    }
}
