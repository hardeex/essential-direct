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
        Schema::create('essential_direct_user_data', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('image_path');
            $table->string('businessID')->unique();
            $table->boolean('is_opnened');
            $table->timestamp('last_visited')->nullable();
            $table->integer('total_visited');
            $table->text('category')->unique();
            $table->string('full_name')->unique();
            $table->integer('phone_number')->unique();
            $table->string('email')->unique();
            $table->string('address')->unique();
            $table->string('bank_details')->unique();
            $table->boolean('is_verified');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('essential_direct_user_data');
    }
};
