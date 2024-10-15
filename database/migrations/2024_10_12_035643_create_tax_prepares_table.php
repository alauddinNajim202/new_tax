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
        Schema::create('tax_prepares', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned()->index();
            $table->string('full_name');
            $table->string('profile_photo')->nullable();
            $table->string('business_name');
            $table->string('business_address');
            $table->string('professional_title');
            $table->string('years_of_experience');
            $table->string('service_photo')->nullable();
            $table->enum('type_rate', ['hourly', 'fixed'])->nullable(); // Add possible values
            $table->string('from_rate')->nullable();
            $table->string('to_rate')->nullable();
            $table->string('certification_avatar')->nullable();
            $table->timestamps();
            $table->softDeletes();

            // Foreign key constraint with cascade on delete
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tax_prepares');
    }
};
