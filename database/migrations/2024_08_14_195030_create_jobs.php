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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('job_name');
            $table->enum('job_field', [
                'Computer Science', 
                'Engineering', 
                'Health', 
                'Architecture', 
                'Business', 
                'Education',
                'Art',
                'Law',
                'Science',
                'Finance'
            ]);
            $table->string('job_company');
            $table->string('job_adress');
            $table->enum( 'job_type', ['remote', 'in_person']);
            $table->string('job_salary');
            $table->date('job_deadline');
            $table->string('job_required_qualification');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
