<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // adminAccount() changes only is_admin to 1 in the users table.
        User::factory()->adminAccount()->count(5)->create();
    }
}
