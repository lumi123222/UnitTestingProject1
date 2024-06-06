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
        Schema::create('power_supplies', function (Blueprint $table) {
            $table->id();
            $table->string('brand');
            $table->string('name');
            $table->integer ('wattage');
            $table->string ('efficiency_rating');
            $table->string('modularity');
            $table->decimal('fan_size');
            $table->decimal('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('power_supplies');
    }
};
