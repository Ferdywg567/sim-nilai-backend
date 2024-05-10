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
        Schema::create('p5_dimension_sub_elements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('element_id')->constrained('p5_dimension_elements')->cascadeOnDelete();
            $table->string('name');
            $table->timestamps();
        });

        Schema::table('p5_project_achievements', function (Blueprint $table) {
            $table->foreignId('subelement_id')->constrained('p5_dimension_sub_elements')->cascadeOnDelete();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('p5_dimension_sub_elements');

        Schema::table('p5_project_achievements', function (Blueprint $table) {
            $table->dropColumn('subelement_id');
        });
    }
};
