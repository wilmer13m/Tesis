<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeyRoomInOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::table('orders', function (Blueprint $table) {
            $table->renameColumn('id_room', 'room_id');

        });

        Schema::table('orders', function (Blueprint $table) {

            $table->integer('room_id')->unsigned()->change();
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


        Schema::table('orders', function (Blueprint $table) {

            $table->dropForeign('orders_room_id_foreign');

        });

        Schema::table('orders', function (Blueprint $table) {
            $table->renameColumn('room_id', 'id_room');

        });
    }
}
