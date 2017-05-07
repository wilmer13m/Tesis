<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeyClientInReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        //añadiendo la llave foranea client_id a la tabla reservations
        Schema::table('reservations', function (Blueprint $table) {
            $table->integer('client_id')->unsigned()->change();
            $table->foreign('client_id')
                ->references('id')
                ->on('clients')
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
        Schema::table('reservations', function (Blueprint $table) {

            $table->dropForeign('reservations_client_id_foreign');

        });
    }
}
