<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ForeignKeysUserMensajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('usermensajes', function (Blueprint $table) {
            //Claves foraneas de la tabla 
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('mensaje_id')->references('id')->on('mensajes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('usermensajes', function (Blueprint $table) {
            //
            $table->dropForeign(['user_id']);
            $table->dropForeign(['mensaje_id']);
        });
    }
}
