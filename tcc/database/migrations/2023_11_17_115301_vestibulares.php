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
        Schema::create('vestibulares', function (Blueprint $table) {
        $table->id('pk_cod_vest');
        $table->string('facu_vest', 30);
        $table->string('ano_vest', 5);
        $table->string('img_vest', 50);
        $table->string('dia_vest', 20)->nullable();
        $table->string('faseum_vest', 100)->nullable();
        $table->string('fasedois_vest', 100)->nullable();
        $table->string('fase3_vest', 100)->nullable();
        $table->string('fase4_vest', 100)->nullable();
        $table->string('fase5_vest', 100)->nullable();
        $table->string('fase6_vest', 100)->nullable();
        $table->string('fase7_vest', 100)->nullable();
        $table->string('fase8_vest', 100)->nullable();
        $table->string('created_at')->nullable();
        $table->string('updated_at')->nullable();
    });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vestibulares');
    }
};
