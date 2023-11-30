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
        Schema::create('alternativas', function (Blueprint $table) {

            $table->id('pk_cod_alt');
            $table->text('texto_alt')->nullable();
            $table->string('img_alt', 100)->nullable();
            $table->boolean('resp_alt')->nullable();
            $table->unsignedBigInteger('quest_id');
            $table->foreign('quest_id')->references('pk_cod_quest')->on('questoes');
            $table->string('created_at')->nullable();
            $table->string('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alternativas');
    }
};
