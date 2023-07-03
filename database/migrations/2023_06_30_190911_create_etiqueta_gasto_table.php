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
        Schema::create('etiqueta_gasto', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('etiqueta_id');
            $table->unsignedBigInteger('gasto_id');

            $table->foreign('etiqueta_id')->references('id')->on('etiquetas')
            ->onDelete('cascade');
            $table->foreign('gasto_id')->references('id')->on('gastos')
            ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etiqueta_gasto');
    }
};
