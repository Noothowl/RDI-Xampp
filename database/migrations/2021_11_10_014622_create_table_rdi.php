<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableRdi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rdi', function (Blueprint $table) {
            $table->id();
            $table->string("fecha",50);
            $table->string("proyecto",20);
            $table->string("destinatario",50);
            $table->string("remitente",50);
            $table->string("especialidad",50);
            $table->string("tema",50);
            $table->string("contenido",50);
            $table->string("plano",50);
            $table->string("prioridad",50);
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
        Schema::dropIfExists('rdi');
    }
}
