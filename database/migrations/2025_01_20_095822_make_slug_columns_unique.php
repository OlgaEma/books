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
        // Adding unique indexes to 'slug' columns
        Schema::table('authors', function (Blueprint $table) {
            $table->string('slug')->unique()->change();
        });
        Schema::table('publishers', function (Blueprint $table) {
            $table->string('slug')->unique()->change();
        });
        Schema::table('categories', function (Blueprint $table) {
            $table->string('slug')->unique()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Dropping unique indexes from 'slug' columns
        Schema::table('authors', function (Blueprint $table) {
            $table->dropUnique(['slug']);
        });
        Schema::table('publishers', function (Blueprint $table) {
            $table->dropUnique(['slug']);
        });
        Schema::table('categories', function (Blueprint $table) {
            $table->dropUnique(['slug']);
        });
    }
};