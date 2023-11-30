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
        Schema::create('semanas', function (Blueprint $table) {
            $table->id('pk_cod_semana');
            $table->string('nome_semana', 30);

            $table->unsignedBigInteger('login_id')->nullable();
            $table->foreign('login_id')->references('id')->on('users');


            $table->string('created_at')->nullable();
            $table->string('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cronogramas');
    }
};
