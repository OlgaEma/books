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
        Schema::create('author_book', function (Blueprint $table) {
            $table->id();  // Primary key, unsigned big integer, auto-increment
            $table->unsignedBigInteger('book_id');
            $table->unsignedBigInteger('author_id');

            // Adding foreign key constraints
            $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');
            $table->foreign('author_id')->references('id')->on('authors')->onDelete('cascade');

            // Adding a unique index on the combination of book_id and publisher_id
            $table->unique(['book_id', 'author_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // When rolling back the migration, just drop the entire table
        Schema::dropIfExists('author_book');
    }
};