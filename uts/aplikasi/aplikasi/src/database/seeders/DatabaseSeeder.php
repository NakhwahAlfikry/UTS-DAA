<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Restoran;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->seedUsers();
        $this->callSeeders();
    }

    private function seedUsers(): void
    {
        if (!User::where('email', 'admin@admin.com')->exists()) {
            $users = User::factory()->createmany([
                [
                    'name' => 'Admin',
                    'email' => 'admin@admin.com',
                    'password' => bcrypt('password'),
                ],
                [
                    'name' => 'Customer',
                    'email' => 'cst@admin.com',
                    'password' => bcrypt('password'),
                ],
            ]);

            foreach ($users as $user) {
                if ($user->email == 'admin@admin.com') {
                    $user->assignRole('super_admin');
                    }
                }
            }
        }

    private function callSeeders(): void {
        $this->call([
            RestoranSeeder::class,
            RoleSeeder::class,
        ]);
}
}
