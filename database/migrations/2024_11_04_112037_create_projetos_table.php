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
        Schema::create('projetos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->text('descricao')->default('Sem-Descrição');
            $table->timestamps();
        });

        Schema::create('membros_projeto', function (Blueprint $table) {
            $table->id();
            $table->foreignId('membro_id')->constrained()->onDelete('cascade');
            $table->foreignId('projeto_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('membros_projeto');
        Schema::dropIfExists('projetos');
    }
};
