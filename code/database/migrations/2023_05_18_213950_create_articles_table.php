<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('journal_id');
            $table->string('title');
            $table->text('abstract');
            $table->text('keywords');
            $table->text('reference');
            $table->string('file_with_author_info');
            $table->string('file_without_author_info');
            $table->text('author_comments')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('articles');
    }
};