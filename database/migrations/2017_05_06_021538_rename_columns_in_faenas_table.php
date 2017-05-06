<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameColumnsInFaenasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //renombrando columnas de las llaves foranea
        Schema::table('faenas', function($table) {

            $table->renameColumn('id_price', 'price_id');
            $table->renameColumn('id_aliquot', 'aliquot_id');
            $table->renameColumn('id_type', 'type_id');



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
        Schema::table('faenas', function($table) {

            $table->renameColumn('price_id', 'id_price');
            $table->renameColumn('aliquot_id', 'id_aliquot');
            $table->renameColumn('type_id', 'id_type');

        });
    }

}
