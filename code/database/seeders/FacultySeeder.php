<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faculty = [
            ['name' => 'Faculty of Science'],
            ['name' => 'Faculty of Arts'],
            ['name' => 'Faculty of Engineering'],
        ];

        DB::table('faculties')->insert($faculty);
    }
}
