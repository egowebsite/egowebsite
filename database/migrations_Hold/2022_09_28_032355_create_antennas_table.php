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
            $table->integer('idRadio')->default(0)->primary();
            $table->string('tipoRadio', 50)->default('CURRENT_TIMESTAMP');
            $table->string('marcaRadio', 50)->default('CURRENT_TIMESTAMP');
            $table->string('referenciaRadio', 50)->default('CURRENT_TIMESTAMP');
            $table->date('fechaIngRadio')->useCurrent();
            $table->date('fechaSalidaRadio')->useCurrent();
            $table->string('usuarioRadio', 100)->default('CURRENT_TIMESTAMP');
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
