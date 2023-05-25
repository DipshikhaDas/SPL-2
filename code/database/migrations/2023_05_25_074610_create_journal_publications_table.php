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
        Schema::create('journal_publications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('journal_id');
            $table->integer('volume_no');
            $table->integer('issue_no');
            $table->date('publication_date')->nullable();
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
        Schema::dropIfExists('journal_publications');
    }
};