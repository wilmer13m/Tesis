<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeyAliquotIdInFaenasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //añadiendo la llave foranea aliquot_id a la tabla faenas
        Schema::table('faenas', function (Blueprint $table) {
            $table->integer('aliquot_id')->unsigned()->change();
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
        Schema::table('faenas', function (Blueprint $table) {
            $table->dropForeign('faenas_aliquot_id_foreign');
        });
    }

}
