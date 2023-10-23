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
        Schema::create('job_orders', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('gender'); //male, female
            $table->string('nationality');
            $table->date('date_of_birth');
            $table->string('identity_number');
            $table->string('residency')->nullable();
            $table->date('date_of_issue');
            $table->string('issuing_authority');
            $table->string('marital_status'); // single, married, widowed, divorced
            $table->string('email');
            $table->string('phone');
            $table->boolean('possibility_of_travel')->default(0);
            $table->boolean('worked_before')->default(0);
            $table->string('qualification');  // university, school
            $table->string('qualification_type'); // diploma - Bachelor - Master
            $table->string('certificate_source');
            $table->string('attach_certificates');
            $table->string('section_type');
            $table->date('graduation_date');
            $table->string('academic_experience')->nullable();
            $table->longText('attach_academic_experience')->nullable();
            $table->string('training_courses')->nullable();
            $table->longText('attach_training_courses')->nullable();
            $table->string('english_level'); // weak, intermediate, advanced
            $table->string('computer_level'); // weak, intermediate, advanced
            $table->string('hear_about_company'); 
            $table->string('cv'); 
            $table->longText('attach_additional_information')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_orders');
    }
};