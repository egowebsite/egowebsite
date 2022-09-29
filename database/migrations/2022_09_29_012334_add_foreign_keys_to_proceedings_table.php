<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToProceedingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('proceedings', function (Blueprint $table) {
            $table->foreign(['User_Id'], 'proceedings_ibfk_1')->references(['idUsers'])->on('users')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('proceedings', function (Blueprint $table) {
            $table->dropForeign('proceedings_ibfk_1');
        });
    }
}
