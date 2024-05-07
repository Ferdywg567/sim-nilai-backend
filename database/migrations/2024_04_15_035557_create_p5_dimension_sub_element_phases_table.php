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
        Schema::create('p5_dimension_sub_element_phases', function (Blueprint $table) {
            $table->id();
            $table->longText('description');
            $table->string('phase');
            $table->foreignId('subelement_id')->constrained('p5_dimension_sub_elements')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('p5_dimension_sub_element_phases');
    }
};
