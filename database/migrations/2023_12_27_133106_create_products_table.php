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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255)->nullable()->unique();
            $table->longText('description')->nullable();
            $table->string('thumbnail', 512)->nullable()->unique();
            $table->decimal('price', 8, 3, true)->nullable();
            $table->enum('currency', ['usd', 'eur', 'amd'])->default('usd');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
