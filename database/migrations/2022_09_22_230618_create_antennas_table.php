<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAntennasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antennas', function (Blueprint $table) {
            $table->integer('idRadio')->index('idRadio');
            $table->string('tipoRadio', 50);
            $table->string('marcaRadio', 50);
            $table->string('referenciaRadio', 50);
            $table->date('fechaIngRadio');
            $table->date('fechaSalidaRadio');
            $table->string('usuarioRadio', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('antennas');
    }
}
