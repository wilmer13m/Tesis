<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeleteForeignKeyPositionInUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::table('users', function (Blueprint $table) {

            $table->dropForeign('users_position_id_foreign');
            $table->dropColumn('position_id');
            $table->string('rol');
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
        Schema::table('users', function (Blueprint $table) {

            $table->integer('position_id')->unsigned();
            $table->foreign('position_id')
                ->references('id')
                ->on('positions')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->dropColumn('rol');
        });
    }
}
