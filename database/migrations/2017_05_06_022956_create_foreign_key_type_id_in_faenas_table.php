<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeyTypeIdInFaenasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        //añadiendo la llave foranea aliquot_id a la tabla faenas
        Schema::table('faenas', function (Blueprint $table) {
            $table->integer('type_id')->unsigned()->change();
            $table->foreign('type_id')
                ->references('id')
                ->on('types')
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
        Schema::table('faenas', function (Blueprint $table) {
            $table->dropForeign('faenas_types_id_foreign');
        });
    }
}
