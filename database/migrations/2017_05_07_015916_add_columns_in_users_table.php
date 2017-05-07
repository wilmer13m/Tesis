<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsInUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //creando las columnas que se usaran como llaves foraneas
        Schema::table('users', function (Blueprint $table) {
            $table->integer('role_id')->unsigned();
            $table->integer('department_id')->unsigned();
            $table->integer('position_id')->unsigned();
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
            $table->dropColumn(['role_id', 'department_id', 'position_id']);
        });
    }
}
