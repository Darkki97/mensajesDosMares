<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ForeignKeysMensajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mensajes', function (Blueprint $table) {
            //Claves foraneas de la tabla 
            $table->foreign('user_id')->references('id')->on('users');
            
            $table->foreign('respuesta_id')->references('id')->on('mensajes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mensajes', function (Blueprint $table) {
            //
            $table->dropForeign(['user_id']);
            $table->dropForeign(['respuesta_id']);
        });
    }
}
