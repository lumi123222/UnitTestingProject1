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
        Schema::create('gpus', function (Blueprint $table) {
            $table->id();
            $table->string('brand');
            $table->string('name');
            $table->decimal('core_clock');
            $table->decimal('boost_clock');
            $table->integer('memory');
            $table->string('memory_type');
            $table->decimal('memory_clock');
            $table->string('interface');
            $table->string('tdp');
            $table->decimal('price');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gpus');
    }
};
