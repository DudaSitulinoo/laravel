<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('atividades', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cultura_id')->constrained()->onDelete('cascade');
            $table->foreignId('area_id')->constrained()->onDelete('cascade');
            $table->foreignId('insumo_id')->constrained()->onDelete('cascade');
            $table->string('descricao');
            $table->timestamp('data_hora');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('atividades');
    }
};
