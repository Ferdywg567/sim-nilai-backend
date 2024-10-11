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
        Schema::create('p5_predicate_options', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('name');
            $table->text('desc');
            $table->timestamps();
        });

        Schema::table('p5_project_achievements', function (Blueprint $table) {
            $table->foreignId('predicate_id')->constrained('p5_predicate_options', 'id')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('p5_predicate_options');

        Schema::table('p5_project_achievements', function (Blueprint $table) {
            $table->dropColumn('predicate_id');
        });
    }
};
