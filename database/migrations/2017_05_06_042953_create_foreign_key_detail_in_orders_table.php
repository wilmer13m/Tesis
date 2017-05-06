<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeyDetailInOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //cambiando el nombre de la tabla detail a details
        Schema::rename('detail', 'details');


        Schema::table('orders', function (Blueprint $table) {

            $table->integer('detail_id')->unsigned()->change();
            $table->foreign('detail_id')
                ->references('id')
                ->on('details')
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
        Schema::rename('details', 'detail');

        Schema::table('orders', function (Blueprint $table) {

            $table->dropForeign('orders_detail_id_foreign');

        });
    }
}
