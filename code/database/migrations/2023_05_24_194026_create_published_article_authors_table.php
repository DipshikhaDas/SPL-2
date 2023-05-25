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
        Schema::create('published_article_authors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('published_article_id');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('email');
            $table->string('url')->nullable();
            $table->timestamps();


            $table->foreign('published_article_id')
                    ->references('id')
                    ->on('published_articles')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('published_article_authors');
    }
};
