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
        $table->string('company_name')->after('id'); // Adjust the position if necessary
    });
}

public function down()
{
    Schema::table('investors', function (Blueprint $table) {
        $table->dropColumn('company_name');
    });
}
};
