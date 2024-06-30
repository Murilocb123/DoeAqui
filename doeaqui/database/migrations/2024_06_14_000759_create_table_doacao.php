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
        Schema::create('doacao', function (Blueprint $table) {
            $table->id();
            //nome da colunas que sera a chave estrangeira é id_beneficiario
            $table->foreignId('id_beneficiario')->constrained('pessoa')->onDelete('cascade');
            $table->foreignId('id_doacao_destino')->constrained('doacao_endereco')->onDelete('cascade');
            $table->string('titulo', 100)->nullable(false);
            $table->text('descricao')->nullable();
            $table->text('forma_doar')->nullable();
            $table->string('finalidade', 200)->nullable();
            $table->string('status', 20)->default('ATIVO');//ATIVO, INATIVO
            $table->string('caminho_imagem', 200)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('doacao', function (Blueprint $table) {
            //
        });
    }
};
