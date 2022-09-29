<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->integer('id')->default(0)->primary();
            $table->string('Usuario', 100)->default('CURRENT_TIMESTAMP');
            $table->date('fechaEvento')->useCurrent();
            $table->string('Cedula', 20)->default('CURRENT_TIMESTAMP');
            $table->string('Telefono', 20)->default('CURRENT_TIMESTAMP');
            $table->string('Direccion', 50)->default('CURRENT_TIMESTAMP');
            $table->string('e-mail', 50)->default('CURRENT_TIMESTAMP');
            $table->string('Ip_Radio', 20)->default('CURRENT_TIMESTAMP');
            $table->string('Ip_Router', 20)->default('CURRENT_TIMESTAMP');
            $table->string('Tipo', 50)->default('CURRENT_TIMESTAMP');
            $table->string('Serial', 50)->default('CURRENT_TIMESTAMP');
            $table->string('Plan', 10)->default('CURRENT_TIMESTAMP');
            $table->string('Nodo_Sectorial', 50)->default('CURRENT_TIMESTAMP');
            $table->string('Coordenadas', 50)->default('CURRENT_TIMESTAMP');
            $table->string('Azimut', 10)->default('CURRENT_TIMESTAMP');
            $table->string('Altura', 10)->default('CURRENT_TIMESTAMP');
            $table->string('Frecuencia', 10)->default('CURRENT_TIMESTAMP');
            $table->string('Alineacion', 10)->default('CURRENT_TIMESTAMP');
            $table->string('otrosEquiposInstalados', 100)->default('CURRENT_TIMESTAMP');
            $table->string('Serial2', 50)->default('CURRENT_TIMESTAMP');
            $table->string('Observacion', 300)->default('CURRENT_TIMESTAMP');
            $table->string('Estado', 20)->default('CURRENT_TIMESTAMP');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
