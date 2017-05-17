<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //eliminando las referencias de la tabla prices para luego eliminarla
        Schema::table('faenas', function($table)
        {
            $table->dropForeign('faenas_price_id_foreign');
            $table->dropColumn('price_id');
        });

        Schema::table('products', function($table)
        {
            $table->dropForeign('products_price_id_foreign');
            $table->dropColumn('price_id');
        });

        Schema::dropIfExists('prices');


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //

        Schema::create('prices',function(Blueprint $table){
            $table->increments('id');
            $table->integer('valor');
            $table->string('porcentaje_utilidades');
            $table->timestamps();
        });

        Schema::table('faenas', function (Blueprint $table) {
            $table->integer('price_id')->unsigned();
            $table->foreign('price_id')
                ->references('id')
                ->on('prices')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        Schema::table('products', function (Blueprint $table) {
            $table->integer('price_id')->unsigned();
            $table->foreign('price_id')
                ->references('id')
                ->on('prices')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });



    }
}
