<?php

namespace Database\Seeders;

use App\Models\Faculty;
use App\Models\Journal;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;

class SomethingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'John Doe',
            'email' => 'john@john.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            // 'remember_token' => Str::random(10),
        ]);
        $user->assignRole('journalAdmin', 'editor', 'author', 'reviewer', 'superAdmin');

        $editor = User::create([
            'name' => 'Random Editor',
            'email' => 'editor@editor.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            // 'remember_token' => Str::random(10),
        ]);
        $editor->assignRole('journalAdmin', 'editor', 'author', 'reviewer', 'superAdmin');


        $faculty = Faculty::create([
            'name' => 'Engineering Faculty',
        ]);

        // $faculty->journalAdmins()->saveMany($user->id);
        $user->faculties()->sync([$faculty->id]);

        $imagePath =    getenv('HOME').'/test.jpeg';
        $fileContents = file_get_contents($imagePath);
        $fileName = basename($imagePath);

        $journal = Journal::create([
            'title' => 'Journal From Seeder',
            'description' => 'a b c d e f g h',
            'aims_and_scope' => ' <ul>' .
            '<li> one </li>' .
            '<li> two </li>' .
            '</ul>',

            'author_guideline' => ' <ul>' .
            '<li> one </li>' .
            '<li> two </li>' .
            '</ul>',
            'faculty_id' => $faculty->id,
            'editor_id' => $editor->id,
            'cover_photo' => 'public/' . Storage::disk('public')->putFileAs('cover-photos', $imagePath, $fileName),
        ]);


    }
}
