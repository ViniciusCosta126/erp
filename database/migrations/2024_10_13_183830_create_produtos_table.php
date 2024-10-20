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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('categoria_id')->constrained('categorias')->onDelete('cascade');
            $table->string('nome', 255);
            $table->string('descricao');
            $table->decimal('preco', 10, 2);
            $table->decimal('preco_custo', 10, 2);
            $table->boolean('status');
            $table->integer('quantidade_estoque');
            $table->integer('quantidade_minima_estoque');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};