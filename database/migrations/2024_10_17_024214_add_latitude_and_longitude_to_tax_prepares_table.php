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
        Schema::table('tax_prepares', function (Blueprint $table) {

            $table->string('latitude')->after('business_address');
            $table->string('longitude')->after('latitude');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tax_prepares', function (Blueprint $table) {
            //
        });
    }
};
