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
        Schema::create('p5_groups', function (Blueprint $table) {
            $table->id();
            $table->foreignId('guru_id')->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('grade');
            $table->string('phase');
            $table->timestamps();
        });

        Schema::table('p5_project_achievements', function (Blueprint $table) {
            $table->foreignId('p5_group_id')->constrained()->cascadeOnDelete();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('p5_groups');

        Schema::table('p5_project_achievements', function (Blueprint $table) {
            $table->dropColumn('p5_group_id');
        });
    }
};
