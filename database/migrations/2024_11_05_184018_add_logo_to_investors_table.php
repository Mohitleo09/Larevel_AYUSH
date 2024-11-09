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
            $table->string('logo')->nullable()->after('amount'); // Ensure you add the logo column
        });
    }

    public function down()
    {
        Schema::table('investors', function (Blueprint $table) {
            $table->dropColumn('logo'); // Drop the column if rolled back
        });
    }
};
