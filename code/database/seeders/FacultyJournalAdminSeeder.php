<?php

namespace Database\Seeders;

use App\Models\Faculty;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FacultyJournalAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            $user = User::create([
            'name' => 'Random Journal Admin',
            'email' => 'ja@ja.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            // 'remember_token' => Str::random(10),
        ]);
        $user->assignRole('journalAdmin', 'editor', 'author', 'reviewer', 'superAdmin');


        $faculty = Faculty::create([
            'name' => 'Test Faculty',
        ]);

        // $faculty->journalAdmins()->saveMany($user->id);
        $user->faculties()->sync([$faculty->id]);
    }
}
