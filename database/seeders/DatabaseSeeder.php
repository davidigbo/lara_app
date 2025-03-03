<?php

namespace Database\Seeders;

use App\Models\Listing;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Truncate tables to prevent duplicate records
        DB::table('users')->truncate();
        DB::table('listings')->truncate();

        // Create a unique test user
        User::firstOrCreate(
            ['email' => 'test@example.com'], 
            ['name' => 'Test User', 'password' => bcrypt('password')]
        );

        // Create 5 Laravel Developer listings
        Listing::factory(1)->create()->each(function ($listing) {
            $listing->update([
                'title' => 'Laravel Developer',
                'tags' => json_encode(['laravel', 'php']), // Convert array to JSON
                'company' => 'Laravel Inc.',
                'location' => 'Lagos, Nigeria',
                'email' => 'test@test.com',
                'website' => 'https://laravel.com',
                'description' => 'We are looking for a Laravel Developer to join our team.',
            ]);
        });

        // Create 5 React Developer listings
        Listing::factory(1)->create()->each(function ($listing) {
            $listing->update([
                'title' => 'React Developer',
                'tags' => json_encode(['react', 'javascript']),
                'company' => 'React Inc.',
                'location' => 'Lagos, Nigeria',
                'email' => 'lara@test.com',
                'website' => 'https://react.com',
                'description' => 'We are looking for a React Developer to join our team.',
            ]);
        });
    }
}
