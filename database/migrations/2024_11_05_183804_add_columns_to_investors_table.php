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
        Schema::table('investors', function (Blueprint $table) {
            $table->string('city')->after('company_name'); // Add city column
            $table->string('state')->after('city'); // Add state column
            // Add any other missing columns similarly
        });
    }

    public function down()
    {
        Schema::table('investors', function (Blueprint $table) {
            $table->dropColumn(['city', 'state']); // Drop the columns if rolled back
        });
    }
};
