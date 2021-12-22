<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrupoEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupo_empresas', function (Blueprint $table) {
            $table->id();

            $table->string('Nombre');
            $table->string('NombreCorto');
            $table->string('TipoSociedad');
            $table->string('Logo');
            $table->string('Correo');
            $table->string('Telefono');
            $table->string('Direccion');
            $table->string('Representante');
            $table->string('Socio1');
            $table->string('Socio2');
            $table->string('Socio3');
            $table->string('Socio4');
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
        Schema::dropIfExists('grupo_empresas');
    }
}
