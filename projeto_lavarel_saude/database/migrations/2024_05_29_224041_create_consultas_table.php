<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('consultas', function (Blueprint $table) {
            $table->id();
            $table->string('rua');
            $table->text('cidade');
            $table->text('bairro');
            $table->text('numero');
            $table->text('especialidade'); 
            $table->text('nomemedico');
            $table->text('nomepaciente');
            $table->date('data');
            $table->text('horario');
            $table->text('data_nascimento');
            $table->text('telefone');
            $table->text('forma_pagamento');
            $table->text('valor');
            $table->timestamp('data_chamado');
            $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultas');
    }
};
