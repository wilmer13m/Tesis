<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeyClientInMaintenancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('maintenances', function (Blueprint $table) {
            $table->integer('location_id')->unsigned()->change();
            $table->foreign('location_id')
                ->references('id')
                ->on('locations')
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

        Schema::table('maintenances', function (Blueprint $table) {

            $table->dropForeign('maintenances_location_id_foreign');

        });
    }
}
