<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameColumnsProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('products', function($table)
        {
            $table->renameColumn('id_prices', 'prices_id');
            $table->renameColumn('id_aliquot', 'aliquot_id');
            $table->renameColumn('id_group','group_id');

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
        Schema::table('products', function($table) {
            $table->renameColumn('prices_id', 'id_prices');
            $table->renameColumn('aliquot_id', 'id_aliquot ');
            $table->renameColumn('group_id','id_group');

        });
    }
}
