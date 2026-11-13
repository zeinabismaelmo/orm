<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::factory()->count(10)->create();

        // User::factory()->adminAccount()->unverified()->count(2)->create();
        // UserFactory::new()->count(3)->create();

        // Sequence: users alternate between is_admin = 0 and is_admin = 1
        // (10 users => 5 normal, 5 admins).
        // $users = User::factory()->count(10)->state(new Sequence(
        //     ['is_admin' => '0'],
        //     ['is_admin' => '1'],
        // ))->create();
        $users = User::factory()->count(10)->Sequence(
            ['is_admin' => '0'],
            ['is_admin' => '1'],
        )->create();
    }
}
