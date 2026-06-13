<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author');
            $table->string('category')->nullable();
            $table->string('cover')->nullable();
            $table->decimal('rating', 2, 1)->default(4.8);
            $table->integer('review_count')->default(0);
            $table->string('status')->default('Tersedia');
            $table->year('year')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};