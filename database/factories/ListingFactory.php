<?php

namespace Database\Factories;

use App\Models\Listing;
use Illuminate\Database\Eloquent\Factories\Factory;

class ListingFactory extends Factory
{
    protected $model = Listing::class;

    public function definition()
    {
        return [
            'title' => $this->faker->jobTitle,
            'tags' => 'laravel, php', // Set default value
            'company' => $this->faker->company,
            'location' => $this->faker->city,
            'email' => $this->faker->safeEmail,
            'website' => $this->faker->url,
            'description' => $this->faker->paragraph,
        ];        
    }
}