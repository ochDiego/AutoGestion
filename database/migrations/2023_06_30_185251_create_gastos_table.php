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
        Schema::create('gastos', function (Blueprint $table) {
            $table->id();

            $table->string('detalle',255);
            $table->float('importe',10,2);
            $table->date('fecha');
            $table->tinyInteger('fijo');

            $table->unsignedBigInteger('categoria_id');
            $table->unsignedBigInteger('pago_id')->unique()->nullable();
            $table->unsignedBigInteger('perfile_id');

            $table->foreign('categoria_id')->references('id')->on('categorias')
            ->onDelete('cascade');
            $table->foreign('pago_id')->references('id')->on('pagos')
            ->onDelete('cascade');
            $table->foreign('perfile_id')->references('id')->on('perfiles')
            ->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gastos');
    }
};
