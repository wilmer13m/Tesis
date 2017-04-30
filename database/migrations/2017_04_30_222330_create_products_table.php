<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('products',function(Blueprint $table){
            $table->increments('id');
            $table->string('nombre');
            $table->string('cantidad_prod');
            $table->integer('id_prices');
            $table->integer('author_id');
            $table->integer('cant_min');
            $table->integer('id_aliquot');
            $table->integer('id_group');
            $table->integer('costo');
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
        Schema::drop('products');

    }
}
