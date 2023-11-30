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
        Schema::create('questoes', function (Blueprint $table) {

            $table->id('pk_cod_quest');
            $table->string('nome_quest', 30);
            $table->text('enunciado_quest');
            $table->string('img_quest', 100)->nullable();
            $table->unsignedBigInteger('cont_id');
            $table->foreign('cont_id')->references('pk_cod_cont')->on('conteudos');

            $table->string('created_at')->nullable();
            $table->string('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questoes');
    }
};
