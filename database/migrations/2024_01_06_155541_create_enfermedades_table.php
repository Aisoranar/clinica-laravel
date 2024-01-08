<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnfermedadesTable extends Migration
{
    public function up()
    {
        Schema::create('enfermedades', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 70);
            $table->string('afecta', 200);
            $table->string('descripcion', 500);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('enfermedades');
    }
}