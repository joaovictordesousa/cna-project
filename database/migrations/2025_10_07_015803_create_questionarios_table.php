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
        Schema::create('questionarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('idade');
            $table->string('sexo');
            $table->string('altura_peso');
            $table->string('contato');
            $table->string('doenca');
            $table->string('medicamento');
            $table->string('hospitalizacao');
            $table->string('alergias');
            $table->string('atividade_fisica');
            $table->string('alimentacao');
            $table->string('fumante');
            $table->string('alcool');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questionarios');
    }
};
