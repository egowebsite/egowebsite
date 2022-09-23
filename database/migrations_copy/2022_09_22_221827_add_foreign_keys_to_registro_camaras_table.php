<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRegistroCamarasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('registro_camaras', function (Blueprint $table) {
            $table->foreign(['idCamara'], 'registro_camaras_ibfk_1')->references(['id'])->on('clientes')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('registro_camaras', function (Blueprint $table) {
            $table->dropForeign('registro_camaras_ibfk_1');
        });
    }
}
