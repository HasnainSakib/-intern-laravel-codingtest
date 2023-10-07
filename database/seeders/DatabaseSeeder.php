<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // User::create([
        //     'name' => 'Webase Applicant',
        //     'email' => 'hello@webase.com.bd',
        //     'password' => Hash::make('webase123'),
        // ]);

        User::create([
            'name' => 'Sakib2',
            'email' => 'sakib2@webase.com',
            'password' => Hash::make('webase123'),
        ]);

    	$this->call([
            ProductSeeder::class,
    	]);
    }
}
