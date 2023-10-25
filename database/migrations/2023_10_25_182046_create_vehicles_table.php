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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('year_id');
            $table->foreignId('make_id');
            $table->foreignId('classic_id');
            $table->foreignId('condition_id');
            $table->integer('mileage');
            $table->integer('price');
            $table->string('vin', 17)->unique();
            $table->date('sell_by_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
