<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroCamarasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_camaras', function (Blueprint $table) {
            $table->integer('idCamara')->index('idCamara');
            $table->string('tipoCamara', 50);
            $table->string('marcaCamara', 50);
            $table->string('referenciaCam', 50);
            $table->date('fechaIngCam');
            $table->date('FechaSalidaCam');
            $table->string('UsuarioCam', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registro_camaras');
    }
}
