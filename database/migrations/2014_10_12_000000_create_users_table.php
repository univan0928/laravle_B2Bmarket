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
        Schema::create('users', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('role');
            $table->string('mobile_number');

            $table->string('business_name');
            $table->string('business_email')->unique();
            $table->string('business_type');
            $table->string('business_phone');
            $table->string('business_url')->nullable();

            $table->timestamp('email_verified_at')->nullable();
            $table->string('first_last_name');
            $table->string('street_address');
            $table->string('receive_message')->nullable();
            $table->string('suite_unit_floor')->nullable();
            $table->string('zip_code');
            $table->string('city');
            $table->string('state');
            $table->string('tax_ein_ssn')->nullable();
            $table->string('invitation_code')->nullable();
            $table->string('official_documents_1')->nullable();
            $table->string('official_documents_2')->nullable();

            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
