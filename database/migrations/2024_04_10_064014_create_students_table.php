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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('study_class_id')->constrained();
            $table->string('name');
            $table->string('nis', 10);
            $table->string('email');
            $table->string('address');
            $table->string('gender', 1);
            $table->string('pob');
            $table->dateTime('dob');
            $table->timestamps();
        });

        Schema::table('p5_project_achievements', function (Blueprint $table) {
            $table->foreignId('student_id')->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');

        Schema::table('p5_project_achievements', function (Blueprint $table) {
            $table->dropColumn('student_id');
        });
    }
};
