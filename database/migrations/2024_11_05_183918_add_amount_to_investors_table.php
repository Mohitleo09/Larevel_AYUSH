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
            $table->decimal('amount', 10, 2)->after('state'); // Ensure you add the amount column
        });
    }

    public function down()
    {
        Schema::table('investors', function (Blueprint $table) {
            $table->dropColumn('amount'); // Drop the column if rolled back
        });
    }
};
