<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRegistroRadiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('registro_radios', function (Blueprint $table) {
            $table->foreign(['idRadio'], 'registro_radios_ibfk_1')->references(['id'])->on('clientes')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('registro_radios', function (Blueprint $table) {
            $table->dropForeign('registro_radios_ibfk_1');
        });
    }
}
