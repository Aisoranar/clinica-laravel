<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicosTable extends Migration
{
    public function up()
    {
        Schema::create('medicos', function (Blueprint $table) {
            $table->id();
            $table->string('nombres', 70);
            $table->string('apellidos', 70);
            $table->date('fecha_nacimiento');
            $table->string('direccion', 150);
            $table->string('telefono', 10);
            $table->string('especialidad', 150);
            $table->unsignedBigInteger('id_contrato');
            $table->timestamps();

            $table->foreign('id_contrato')->references('id')->on('tipo_contratos')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('medicos');
    }
}
