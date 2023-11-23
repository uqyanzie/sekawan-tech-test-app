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
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('vehicle_code');
            $table->string('license_plate');
            $table->text('image');
            $table->enum('category', ['transportasi', 'pengangkut tambang', 'pengangkut logisitik']);
            $table->enum('type', ['milik perusahaan', 'sewaan']);
            $table->enum('status', ['tersedia', 'tidak tersedia'])->default('tersedia');
            $table->timestamp('available_until')->nullable();
            $table->string('provider')->default('PT Sekawan Media');
            $table->enum('location_base', ['kantor pusat', 'kantor cabang', 'tambang 1', 'tambang 2', 'tambang 3', 'tambang 4', 'tambang 5', 'tambang 6']);
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
