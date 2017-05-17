<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('faenas', function($table)
        {
            $table->dropForeign('faenas_type_id_foreign');
            $table->dropColumn('type_id');
        });

        Schema::dropIfExists('types');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //

        Schema::create('types',function(Blueprint $table){
            $table->increments('id');
            $table->string('nombre');
            $table->timestamps();
        });

        Schema::table('faenas', function (Blueprint $table) {
            $table->integer('type_id')->unsigned();
            $table->foreign('type_id')
                ->references('id')
                ->on('types')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });


    }
}
