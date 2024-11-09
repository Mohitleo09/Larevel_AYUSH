<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('mentors', function (Blueprint $table) {
        $table->id();
        $table->string('mentor_name');
        $table->string('Contact_Number');
        $table->string('gmail');
        $table->string('mentor_city');
        $table->string('mentor_state');
        $table->text('about');
        $table->string('Gudience_areas');
        $table->string('mentor_image')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mentors');
    }
};
