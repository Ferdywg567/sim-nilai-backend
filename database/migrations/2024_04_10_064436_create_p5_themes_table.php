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
        Schema::create('p5_themes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::table('p5_projects', function (Blueprint $table) {
            $table->foreignId('p5_theme_id')->nullable()->constrained()->cascadeOnUpdate()->nullOnDelete();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('p5_themes');

        Schema::table('p5_projects', function (Blueprint $table) {
            $table->dropColumn('p5_theme_id');
        });
    }
};
