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
        Schema::create('essential_direct_business_models', function (Blueprint $table) {
            $table->id();
            $table->string('image_path')->nullable();
            $table->string('businessID');
            $table->boolean('is_opened');
            $table->timestamp('last_visited')->nullable();
            $table->integer('total_visited');
            $table->text('category');
            $table->string('full_name');
            $table->string('phone_number');
            $table->string('email');
            $table->string('address');
            $table->string('bank_details');
            $table->boolean('is_verified');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('essential_direct_business_models');
    }
};
