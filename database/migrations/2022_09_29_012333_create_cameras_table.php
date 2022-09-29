<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCamerasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cameras', function (Blueprint $table) {
            $table->integer('idCamara')->default(0)->primary();
            $table->string('tipoCamara', 50)->default('CURRENT_TIMESTAMP');
            $table->string('marcaCamara', 50)->default('CURRENT_TIMESTAMP');
            $table->string('referenciaCam', 50)->default('CURRENT_TIMESTAMP');
            $table->date('fechaIngCam')->useCurrent();
            $table->date('fechaSalidaCam')->useCurrent();
            $table->string('usuarioCam', 100)->default('CURRENT_TIMESTAMP');
            $table->integer('User_id')->default(0)->index('User_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cameras');
    }
}
