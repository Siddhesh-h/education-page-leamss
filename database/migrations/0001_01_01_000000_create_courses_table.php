<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->unsignedInteger('sort')->default(0);
            $table->string('degree');
            $table->string('spec')->default('');
            $table->string('university');
            $table->string('degree_type');
            $table->string('level');
            $table->unsignedInteger('fee_per_semester');
            $table->string('duration');
            $table->string('image');
            $table->string('link');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
