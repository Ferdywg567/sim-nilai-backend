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
        Schema::create('p5_project_target_profile_achievements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('p5_project_id')->constrained()->cascadeOnDelete();
            $table->foreignId('p5_phase_id')->constrained('p5_dimension_sub_element_phases')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('p5_project_target_profile_achievements');
    }
};
