<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('p5_project_achievements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->cascadeOnUpdate()->nullOnDelete();
            $table->foreignId('p5_project_id')->constrained()->cascadeOnDelete();
            $table->foreignId('p5_group_id')->constrained()->cascadeOnDelete();
            $table->foreignId('subelement_id')->constrained('p5_dimension_sub_elements')->cascadeOnDelete();
            $table->foreignId('student_id')->constrained()->cascadeOnDelete();
            $table->string('predicate');
            $table->timestamps();

            // $predicate = ['MB', 'SeB', 'BSH', 'SaB']; // Mulai Berkembang, Sedang Berkembang, Berkembang Sesuai Harapan, Sangat Berkembang
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('p5_project_achievements');
    }
};
