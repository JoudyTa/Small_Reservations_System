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
        Schema::create('res', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone_number');
            $table->date('date_of_birth');
            $table->bigInteger('gender_id')->unsigned();
            $table->foreign('gender_id')->references('id')->on('genders')->onDelete('cascade');
            $table->bigInteger('country_of_residency_id')->unsigned();
            $table->foreign('country_of_residency_id')->references('id')->on('country_of_residencies')->onDelete('cascade');
            $table->string('passport_no');
            $table->date('issue_date');
            $table->date('expiry_date');
            $table->bigInteger('place_of_issue_id')->unsigned();
            $table->foreign('place_of_issue_id')->references('id')->on('place_of_issues')->onDelete('cascade');
            $table->date('arrival_date');
            $table->string('profession')->nullable();
            $table->string('organization')->nullable();
            $table->integer('visa_duration');
            $table->bigInteger('visa_status_id')->unsigned();
            $table->foreign('visa_status_id')->references('id')->on('visa_statuses')->onDelete('cascade');
            $table->string('passport_picture');
            $table->string('personal_picture');
            $table->boolean('with_companion')->defaultFalse();
            $table->date('check_in_date');
            $table->date('check_out_date');
            $table->bigInteger('rom_type_id')->unsigned();
            $table->foreign('rom_type_id')->references('id')->on('rom_types')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('res');
    }
};
