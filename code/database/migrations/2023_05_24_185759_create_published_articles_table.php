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
        Schema::create('published_articles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('journal_id');
            $table->string('title');
            $table->text('abstract');
            $table->text('reference');
            $table->date('publication_date');
            $table->string('doi')->nullable();
            $table->string('cover_photo')->nullable();
            $table->string('published_article_file');
            $table->timestamps();


            $table->foreign('journal_id')
                    ->references('id')
                    ->on('journals')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('published_articles');
    }
};
