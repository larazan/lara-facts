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
        Schema::create('facts', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('author_id')->nullable();
            $table->string('type')->nullable();
            $table->integer('category_id');
            $table->string('title')->nullable()->unique();
            $table->string('slug');
            $table->text('description')->nullable();
            $table->string('tags')->nullable();
            $table->dateTime('history_time')->nullable();
            $table->string('bgColor')->nullable();
            $table->string('color')->nullable();
            $table->string('original')->nullable();
            $table->string('medium')->nullable();
            $table->string('small')->nullable();
            $table->string('status', 10)->default('active');
            $table->timestamps();
            $table->softDeletes();

            $table->foreignUuid('parent_id')->references('id')->on('facts');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facts');
    }
};
