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
            $table->bigIncrements('id');
            $table->string('rand_id');
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->string('author_id')->nullable();
            $table->integer('category_id');
            $table->string('title')->nullable()->unique();
            $table->string('slug');
            $table->text('description')->nullable();
            $table->string('tags')->nullable();
            $table->time('history_time')->nullable();
            $table->string('bgColor')->nullable();
            $table->string('color')->nullable();
            $table->string('original')->nullable();
            $table->string('medium')->nullable();
            $table->string('small')->nullable();
            $table->string('status', 10)->default('active');
            $table->dateTime('posted_at')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('parent_id')->references('id')->on('facts');
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
