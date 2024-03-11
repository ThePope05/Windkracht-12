<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Invite;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Invite::factory()->create([
            'claimed' => true,
            'name' => 'Admin',
            'email' => 'admin@kitesurfschool.com',
            'token' => bin2hex(random_bytes(16)),
            'last_sent_at' => now(),
        ]);

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@kitesurfschool.com',
            'password' => bcrypt('admin1234'),
            'remember_token' => null,
        ]);
    }
}
