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
        Schema::create('doacao_forma_pagamento', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_doacao')->primary(true)->references('id')->on('doacao');
            $table->string('tipo',100);//boleto, cartao de credito, pix
            $table->string('descricao', 200)->nullable();
            $table->string('moeda', 20)->default('BRL');//BRL, USD
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('doacao_forma_pagamento', function (Blueprint $table) {
            //
        });
    }
};