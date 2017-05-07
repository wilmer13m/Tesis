<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameColumnsInMaintenancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::table('maintenances', function($table) {

            $table->renameColumn('id_location', 'location_id');
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

        Schema::table('maintenances', function($table) {

            $table->renameColumn('client_id', 'id_client');
            $table->renameColumn('user_id', 'id_user');

        });
    }
}
