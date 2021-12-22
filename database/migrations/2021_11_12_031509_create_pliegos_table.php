<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePliegosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pliegos', function (Blueprint $table) {
            $table->id();
            $table->string('docente')->nullable();
            $table->string('titulo')->nullable();
            $table->string('materia')->nullable();
            $table->string('sismat')->nullable();
            $table->date('fecha')->nullable(); 
            $table->string('semestre')->nullable();
            $table->string('documento')->nullable(); 
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
        Schema::dropIfExists('pliegos');
    }
}
