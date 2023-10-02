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
        Schema::create('customers', function (Blueprint $table) {
            $table->id('customer_id');
            $table->string('name');
            $table->string('mobile');
            $table->string('password');
            $table->string('class'); // Assuming class is a string, you can change it to an integer if needed
            $table->json('subjects'); // Store multiple subjects as JSON array
            $table->string('gender');
            $table->string('profile_pic')->nullable(); // Store profile picture path, make it nullable
            $table->text('address')->nullable(); // Store address as text, make it nullable
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
