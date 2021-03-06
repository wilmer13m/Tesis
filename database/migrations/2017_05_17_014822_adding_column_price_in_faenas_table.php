<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddingColumnPriceInFaenasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('faenas', function($table) {
            $table->integer('precio');
            $table->integer('porcentaje_utilidad');

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
        Schema::table('faenas', function (Blueprint $table) {
            $table->dropColumn('precio');
            $table->dropColumn('porcentaje_utilidad');

        });
    }
}
