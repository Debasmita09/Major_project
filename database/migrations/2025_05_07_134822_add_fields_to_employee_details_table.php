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
        Schema::table('employee_details', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('class_10_school_name');
            $table->string('class_10_board_name');
            $table->string('class_10_percentage_cgpa');
            $table->string('class_12_school_name');
            $table->string('class_12_board_name');
            $table->string('class_12_percentage_cgpa');
            $table->string('graduation_college_name');
            $table->string('graduation_specialization');
            $table->string('graduation_cgpa');
            $table->string('post_graduation_college_name')->nullable();
            $table->string('post_graduation_specialization')->nullable();
            $table->string('post_graduation_cgpa')->nullable();
            $table->text('skills');
            $table->string('organization_name');
            $table->string('experience_duration_years');
            $table->string('certificate_links')->nullable();
            $table->string('resume_path')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('employee_details', function (Blueprint $table) {
            //
        });
    }
};
