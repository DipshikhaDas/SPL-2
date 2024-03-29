
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
            $table->text('aims_and_scope')->nullable();
            $table->text('author_guideline')->nullable();
            $table->text('editorial_board')->nullable();
            $table->unsignedBigInteger('editor_id')->nullable();
            $table->string('cover_photo')->nullable();
            $table->unsignedBigInteger('faculty_id')->nullable();
            $table->boolean('accepting_articles')->default(true);
            $table->string('impact_factor')->nullable();
            $table->timestamps();

            $table->foreign('faculty_id')
                    ->references('id')
                    ->on('faculties')
                    ->onDelete('cascade');

            $table->foreign('editor_id')
                    ->references('id')
                    ->on('users')
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
