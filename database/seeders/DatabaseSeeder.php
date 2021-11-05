<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // JUST FOR DEMO PURPOSE ONLY
        // IN REAL WORLD PROJECT I WOULD USE ROLES & PERMISSIONS
        User::factory()->create([
            'name' => 'صالح سعيد',
            'email' => 'admin@company.com',
            'password' => bcrypt('admin123password'),
            'roles' => User::ROLE_ADMIN
        ]);

        User::factory()->create([
            'name' => 'عبدالرحمن جحاف',
            'email' => 'hr@company.com',
            'password' => bcrypt('hrpass123'),
            'roles' => User::ROLE_HR
        ]);

        User::factory(100)->create();

    }
}
