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
        Schema::create('journal_volume_issues', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('volume_id');
            $table->integer('issue_no');
            $table->date('publication_date')->nullable();
            $table->timestamps();


            $table->foreign('volume_id')
                    ->references('id')
                    ->on('journal_volumes')
                    ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('journal_volume_issues');
    }
};
