<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeingKeyClientInRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //añadiendo la llave foranea de id_client en la tabla requests
        Schema::table('requests', function (Blueprint $table) {
            $table->integer('id_client')->unsigned()->change();
            $table->foreign('id_client')
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
        Schema::table('requests', function (Blueprint $table) {
            $table->dropForeign('requests_id_client_foreign');
        });
    }
}
