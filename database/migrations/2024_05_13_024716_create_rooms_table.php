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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string("user_id");
            $table->string("name");
            $table->string("image");
            $table->string("description");
            $table->string("city");
            $table->string("adult");
            $table->string("child");
            $table->string("bed");
            $table->string("bathroom");
            $table->string("price");
            $table->date("from"); // Change data type to date
            $table->date("to"); // Change data type to date
            
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
        Schema::dropIfExists('rooms');
    }
};
