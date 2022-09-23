<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroRouterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_router', function (Blueprint $table) {
            $table->integer('idRouter')->index('idRouter');
            $table->string('tipoRouter', 50);
            $table->string('marcaRouter', 50);
            $table->string('referenciaRouter', 50);
            $table->date('fechaIngRouter');
            $table->date('fechaSalidaRouter');
            $table->string('usuarioRouter', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registro_router');
    }
}
