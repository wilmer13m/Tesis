<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameColumnsInOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //renombrando las columnas que se usaran para las llaves foraneas

        Schema::table('orders', function($table) {

            $table->renameColumn('id_client', 'client_id');
            $table->renameColumn('id_detail_order', 'detail_id');
            $table->renameColumn('id_origin', 'origin_id');
            $table->renameColumn('id_user', 'user_id');

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

        Schema::table('orders', function($table) {

            $table->renameColumn('client_id', 'id_client');
            $table->renameColumn('detail_id', 'id_detail');
            $table->renameColumn('origin_id', 'id_origen');
            $table->renameColumn('user_id', 'id_user');

        });
    }
}
