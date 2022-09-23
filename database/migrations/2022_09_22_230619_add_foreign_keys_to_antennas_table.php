<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAntennasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('antennas', function (Blueprint $table) {
            $table->foreign(['idRadio'], 'antennas_ibfk_1')->references(['id'])->on('customers')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('antennas', function (Blueprint $table) {
            $table->dropForeign('antennas_ibfk_1');
        });
    }
}
