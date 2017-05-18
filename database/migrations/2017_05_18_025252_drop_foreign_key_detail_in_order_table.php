<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropForeignKeyDetailInOrderTable extends Migration
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

            $table->dropForeign('orders_detail_id_foreign');
            $table->dropColumn('detail_id');
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
            $table->integer('detail_id')->unsigned()->change();
            $table->foreign('detail_id')
                ->references('id')
                ->on('details')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }
}
