<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoutersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routers', function (Blueprint $table) {
            $table->integer('idRouter')->default(0)->primary();
            $table->string('tipoRouter', 50)->default('CURRENT_TIMESTAMP');
            $table->string('marcaRouter', 50)->default('CURRENT_TIMESTAMP');
            $table->string('referenciaRouter', 50)->default('CURRENT_TIMESTAMP');
            $table->date('fechaIngRouter')->useCurrent();
            $table->date('fechaSalidaRouter')->useCurrent();
            $table->string('usuarioRouter', 50)->default('CURRENT_TIMESTAMP');
            $table->integer('users_Id')->default(0)->index('users_Id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('routers');
    }
}
