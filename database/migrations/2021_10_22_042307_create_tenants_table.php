<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenants', function (Blueprint $table) {
            $table->id();
            $table->string('transaction')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('reference_id');
            $table->foreign('reference_id')->references('id')->on('tenant_references');
            $table->unsignedBigInteger('roomie_id');
            $table->foreign('roomie_id')->references('id')->on('tenant_roomies');
            $table->string('tipo_de_persona');
            $table->string('rfc');
            $table->date('fecha_de_nacimiento');
            $table->string('estado_civil');
            $table->string('ingresos_netos');
            $table->string('identificacion_oficial');
            $table->string('direccion_vivienda_actual');
            $table->string('institucion_educativa');
            $table->string('historial_crediticio');
            $table->string('trabajo');
            $table->string('empresa');
            $table->string('documentacion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tenants');
    }
}
