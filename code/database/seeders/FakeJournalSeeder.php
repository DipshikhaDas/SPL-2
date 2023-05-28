<?php

namespace Database\Seeders;

use App\Models\Journal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class FakeJournalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for($i=0;$i<5;$i++){
            $journal = Journal::create([
            'title' => $faker->sentence,
            'description' => $faker->paragraph,
            'aims_and_scope' => $faker->paragraph,

            'author_guideline' => $faker->paragraph,

            'editorial_board' => $faker->paragraph,

            'faculty_id' => 4,
            'editor_id' => 1,
            // 'cover_photo' => 'public/' . Storage::disk('public')->putFileAs('cover-photos', $imagePath, $fileName),
        ]);
        }
    }
}
