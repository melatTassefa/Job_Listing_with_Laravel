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
            $table->string('job_company');
            $table->string('job_adress');
            $table->string('job_salary');
            $table->date('job_deadline');
            $table->string('job_required_qualification');
            $table->timestamps();
            //ADDED
            //$table->foreignId('user_id')->constrained()->onDelete('cascade');
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