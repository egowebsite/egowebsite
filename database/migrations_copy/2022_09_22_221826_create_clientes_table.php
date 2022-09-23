<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('Usuario', 100)->index('Usuario');
            $table->date('fechaEvento');
            $table->integer('Cedula');
            $table->integer('Telefono');
            $table->string('Direccion', 50);
            $table->string('e-mail', 50);
            $table->string('Ip_Radio', 20);
            $table->string('Ip_Router', 20);
            $table->string('Tipo', 50);
            $table->string('Serial', 50)->index('Serial');
            $table->string('Plan', 10);
            $table->string('Nodo_Sectorial', 50);
            $table->string('Coordenadas', 50);
            $table->string('Azimut', 10);
            $table->string('Altura', 10);
            $table->integer('Frecuencia');
            $table->string('Alineacion', 10);
            $table->string('otrosEquiposInstalados', 100);
            $table->string('Serial2', 50)->index('Serial2');
            $table->string('Observacion', 300);
            $table->string('Estado', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
