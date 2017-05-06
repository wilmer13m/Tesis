<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeyPriceIdInFaenasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //añadiendo la llave foranea price_id a la tabla faenas
        Schema::table('faenas', function (Blueprint $table) {
            $table->integer('price_id')->unsigned()->change();
            $table->foreign('price_id')
                ->references('id')
                ->on('prices')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
        Schema::table('faenas', function (Blueprint $table) {

            $table->dropForeign('faenas_price_id_foreign');
        });

    }
}
