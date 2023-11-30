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
        Schema::create('crono_cont', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cont_id');
            $table->foreign('cont_id')->references('pk_cod_cont')->on('conteudos');

            $table->unsignedBigInteger('semana_id');
            $table->foreign('semana_id')->references('pk_cod_semana')->on('semanas');

            $table->string('created_at')->nullable();
            $table->string('updated_at')->nullable();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crono_cont');
    }
};
