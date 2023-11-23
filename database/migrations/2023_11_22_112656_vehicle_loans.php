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
        Schema::create('vehicleLoans', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('vehicle_loan_code');
            $table->string('grantor_of_permission');
            $table->string('borrower_name');
            $table->enum('borrower_position', ['kantor pusat', 'kantor cabang', 'tambang 1', 'tambang 2', 'tambang 3', 'tambang 4', 'tambang 5', 'tambang 6']);
            $table->string('borrower_phone');
            $table->string('borrower_email');
            $table->enum('status', ['diajukan', 'disetujui', 'sedang berlangsung', 'selesai'])->default('diajukan');
            $table->timestamp('start_date');
            $table->timestamp('end_date')->default(null)->nullable();
            $table->enum('used_at_location', ['kantor pusat', 'kantor cabang', 'tambang 1', 'tambang 2', 'tambang 3', 'tambang 4', 'tambang 5', 'tambang 6']);
            $table->timestamps();
            $table->foreign('grantor_of_permission')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicleLoans');
    }
};
