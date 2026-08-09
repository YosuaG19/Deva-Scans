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
        Schema::create('comics', function(Blueprint $table){
            $table->id();
            $table->foreignId('type_id');
            $table->foreignId('status_id');
            $table->foreignId('creator_id')->nullable()->constrained('users')->cascadeOnDelete();
            
            $table->string('title')->unique();
            $table->string('slug')->unique();
            $table->text('desc');
            $table->string('cover_path');
            $table->string('author');
            $table->string('artist');
            $table->string('upt_day');
            
            $table->unsignedInteger('chapter_count')->default(0);
            $table->unsignedInteger('bookmarks_count')->default(0);
            $table->unsignedInteger('rating_count')->default(0);
            $table->decimal('rating_avg', 3, 1)->default(0);
            
            $table->timestamp('last_chapter_at');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
