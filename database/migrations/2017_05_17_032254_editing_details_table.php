<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditingDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('details', function($table) {
            $table->integer('exento');

            $table->integer('aliquot_id')->unsigned();
            $table->foreign('aliquot_id')
                ->references('id')
                ->on('aliquots')
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

        Schema::table('details', function($table) {
            $table->dropColumn('exento');
            $table->dropForeign('products_aliquot_id_foreign');
            $table->dropColumn('aliquot_id');

        });
    }
}
