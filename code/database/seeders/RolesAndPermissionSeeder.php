<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdminRole = Role::create(['name' => 'superAdmin']);
        $journalAdminRole = Role::create(['name' => 'journalAdmin']);
        $editorRole = Role::create(['name' => 'editor']);
        $reviewerRole = Role::create(['name' => 'reviewer']);
        $authorRole = Role::create(['name' => 'author']);
        // $adminRole = Role::create(['name' => 'admin']);


    }
}
