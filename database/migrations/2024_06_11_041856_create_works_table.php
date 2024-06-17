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
        Schema::create('works', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->text('case_study');
            $table->string('work_snapshot');
            $table->string('livelink')->nullable();
            $table->string('livelink_text')->nullable();
            $table->string('repolink')->nullable();
            $table->string('caselink')->nullable();
            $table->json('tech_stack'); // Storing multiple tech stack icons as JSON
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('works');
    }
};
