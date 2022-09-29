<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->integer('idUsers')->default(0)->primary();
            $table->string('name', 100)->default('CURRENT_TIMESTAMP');
            $table->string('mailUsers', 50)->default('CURRENT_TIMESTAMP');
            $table->string('password', 50)->default('CURRENT_TIMESTAMP');
            $table->string('role', 50)->default('CURRENT_TIMESTAMP');
            $table->string('state', 50)->default('CURRENT_TIMESTAMP');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
