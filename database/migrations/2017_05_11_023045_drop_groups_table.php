<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('products', function($table)
        {
            $table->dropForeign('products_group_id_foreign');
            $table->dropColumn('group_id');
        });

        Schema::dropIfExists('groups');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //


        Schema::create('groups',function(Blueprint $table){
            $table->increments('id');
            $table->string('nombre');
            $table->timestamps();
        });

        Schema::table('products', function (Blueprint $table) {
            $table->integer('group_id')->unsigned();
            $table->foreign('group_id')
                ->references('id')
                ->on('groups')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

    }
}
