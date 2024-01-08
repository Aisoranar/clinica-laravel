<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombres', 70);
            $table->string('apellidos', 70);
            $table->date('fecha_nacimiento');
            $table->string('direccion', 150);
            $table->string('telefono', 10);
            $table->unsignedBigInteger('id_medico');
            $table->timestamps();

            $table->foreign('id_medico')->references('id')->on('medicos')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pacientes');
    }
}