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
    Schema::table('mentors', function (Blueprint $table) {
        $table->text('Gudience_areas')->nullable(); // Use text for longer descriptions
    });
}

public function down()
{
    Schema::table('mentors', function (Blueprint $table) {
        $table->dropColumn('Gudience_areas');
    });
}

};
