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
        Schema::create('pc_parts', function (Blueprint $table) {
            $table->id();
           // $table->string('name');
           // $table->string('description');
            $table->unsignedBigInteger('cpus_id');
            $table->unsignedBigInteger('gpus_id');
            $table->unsignedBigInteger('rams_id');
            $table->unsignedBigInteger('power_supplies_id');
            $table->unsignedBigInteger('cpu_coolers_id');
            $table->unsignedBigInteger('towers_id');
            $table->unsignedBigInteger('storages_id');
            $table->unsignedBigInteger('motherboards_id');
            $table->timestamps();

            $table->foreign('cpus_id')->references('id')->on('cpus')->onDelete('cascade');
            $table->foreign('gpus_id')->references('id')->on('gpus')->onDelete('cascade');
            $table->foreign('rams_id')->references('id')->on('rams')->onDelete('cascade');
            $table->foreign('power_supplies_id')->references('id')->on('power_supplies')->onDelete('cascade');
            $table->foreign('cpu_coolers_id')->references('id')->on('cpu_coolers')->onDelete('cascade');
            $table->foreign('towers_id')->references('id')->on('towers')->onDelete('cascade');
            $table->foreign('storages_id')->references('id')->on('storages')->onDelete('cascade');
            $table->foreign('motherboards_id')->references('id')->on('motherboards')->onDelete('cascade');

            //for user id 
            $table->unsignedBigInteger('user_id')->nullable(); 
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pc_parts');
    }
};
