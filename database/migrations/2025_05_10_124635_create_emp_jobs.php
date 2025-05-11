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
    Schema::create('emp_jobs', function (Blueprint $table) {
        $table->id();
        $table->string('job_title');
        $table->string('category');
        $table->string('designation');
        $table->string('job_type');
        $table->string('salary');
        $table->string('city');
        $table->text('job_description');
        $table->text('benefits')->nullable();
        $table->text('qualifications')->nullable();
        $table->string('organisation_name');
        $table->string('email');
        $table->string('location');
        $table->string('website')->nullable();
        $table->string('company_logo')->nullable(); // For logo path
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emp_jobs');
    }
};
