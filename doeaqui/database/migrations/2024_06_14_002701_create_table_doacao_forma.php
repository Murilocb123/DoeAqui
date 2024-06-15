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
        Schema::create('doacao_forma', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_doacao')->primary(true)->references('id')->on('doacao');
            $table->foreignId('id_pagamento')->preferences('id')->on('doacao_forma_pagamento')->onDelete('cascade');
            $table->foreignId('id_ponto_coleta')->references('id')->on('coleta_endereco')->onDelete('cascade');
            $table->foreignId('id_item')->references('id')->on('doacao_forma_item')->onDelete('cascade');
            $table->decimal('valor', 10, 2);
            $table->decimal('quantidade',10,2);
            $table->string('tipo', 20)->default('ITEM');//ITEM, PAGAMENTO
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('doacao_item', function (Blueprint $table) {
            //
        });
    }
};
