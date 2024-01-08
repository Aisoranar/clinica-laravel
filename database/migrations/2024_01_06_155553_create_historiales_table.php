<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistorialesTable extends Migration
{
    public function up()
{
    Schema::create('historiales', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('paciente_id');
        $table->unsignedBigInteger('enfermedad_id');
        $table->timestamps();

        $table->foreign('paciente_id')->references('id')->on('pacientes')->onDelete('cascade');
        $table->foreign('enfermedad_id')->references('id')->on('enfermedades')->onDelete('cascade');
    });
}

    public function down()
    {
        Schema::dropIfExists('historiales');
    }
}