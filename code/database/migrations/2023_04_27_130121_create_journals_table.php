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
        Schema::create('journals', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->integer('volume_no');
            $table->integer('issue_no');
            $table->datetime('deadline_date');
            $table->string('cover_photo')->nullable();
            $table->unsignedBigInteger('faculty_id');
            $table->timestamps();

            $table->foreign('faculty_id')
                    ->references('id')
                    ->on('faculties')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('journals');
    }
};
