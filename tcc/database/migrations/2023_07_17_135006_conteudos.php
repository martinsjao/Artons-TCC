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
        Schema::create('conteudos', function (Blueprint $table) {
            $table->id('pk_cod_cont');
            $table->string('nome_cont', 100);
            $table->text('texto_cont')->nullable();
            $table->string('route_texto_cont', 100)->nullable();
            $table->text('video_cont')->nullable();
            $table->unsignedBigInteger('disc_id');
            $table->foreign('disc_id')->references('pk_cod_disc')->on('disciplinas');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conteudos');
    }
};
