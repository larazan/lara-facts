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
            $table->integer('category_id');
            $table->string('title')->nullable();
            $table->string('slug');
            $table->text('description')->nullable();
            $table->string('tags')->nullable();
            $table->string('original')->nullable();
            $table->string('medium')->nullable();
            $table->string('small')->nullable();
            $table->integer('status')->default(0);
            $table->dateTime('posted_at')->nullable();
            $table->timestamps();
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
