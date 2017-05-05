<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameColumnsInRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //cambiando los nombre de los id a la convencion q usa laravel
        Schema::table('requests', function($table)
        {
            $table->dropForeign('requests_id_client_foreign');
            $table->dropForeign('requests_id_room_foreign');
            $table->renameColumn('id_client', 'client_id');
            $table->renameColumn('id_room', 'room_id');

            $table->foreign('client_id')
                ->references('id')
                ->on('clients')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('room_id')
                ->references('id')
                ->on('rooms')
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
        Schema::table('requests', function($table) {
            $table->dropForeign('requests_client_id_foreign');
            $table->dropForeign('requests_room_id_foreign');
            $table->renameColumn('client_id', 'id_client');
            $table->renameColumn('room_id', 'id_room');


            $table->foreign('id_client')
                ->references('id')
                ->on('clients')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_room')
                ->references('id')
                ->on('rooms')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });


    }
}
