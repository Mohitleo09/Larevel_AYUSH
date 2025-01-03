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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string("user_id");
            $table->string("room_id");
            $table->string("user_name");
            $table->string("user_email");
            $table->string("status")->default('pending'); // Add default value 'pending'
            $table->string("total")->default('0'); // Assuming the default value for total is '0'
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
