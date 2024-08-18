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
        Schema::create('job_fields', function (Blueprint $table) {
            $table->id();
            $table->enum('field_name', [
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
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_fields');
    }
};
