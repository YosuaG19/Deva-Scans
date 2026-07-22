<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ratings', function(Blueprint $table){
            $table->id();
            $table->foreignId('comic_id');
            $table->foreignId('user_id');
            $table->integer('rate');
            $table->timestamps();
        });

        DB::statement("
            ALTER TABLE ratings
            ADD CONSTRAINT chk_rating
            CHECK (rate BETWEEN 0 AND 10)
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ratings');
    }
};
