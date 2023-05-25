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
        Schema::create('keyword_published_article', function (Blueprint $table) {
            $table->unsignedBigInteger('published_article_id');
            $table->unsignedBigInteger('keyword_id');
            $table->timestamps();

            $table->foreign('published_article_id')->references('id')->on('published_articles')->onDelete('cascade');
            $table->foreign('keyword_id')->references('id')->on('keywords')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keyword_published_article');
    }
};
