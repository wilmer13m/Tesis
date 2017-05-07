<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameColumnsInReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::table('reservations', function($table) {

            $table->renameColumn('id_client', 'client_id');
            $table->renameColumn('id_user', 'user_id');
            $table->renameColumn('id_room', 'room_id');

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

        Schema::table('reservations', function($table) {

            $table->renameColumn('client_id', 'id_client');
            $table->renameColumn('user_id', 'id_user');
            $table->renameColumn('room_id', 'id_room');

        });
    }
}
