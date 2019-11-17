<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ForeignKeysUserClasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('userClases', function (Blueprint $table) {
            //Claves foraneas de la tabla 
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('clase_id')->references('id')->on('clases');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('userClases', function (Blueprint $table) {
            //
            $table->dropForeign(['user_id']);
            $table->dropForeign(['clase_id']);
        });
    }
}
