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
        Schema::create('tax_prepare_certifications', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('tax_prepare_id')->unsigned();
            $table->string('certification_file');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('tax_prepare_id')->references('id')->on('tax_prepares')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tax_prepare_certifications');
    }
};
