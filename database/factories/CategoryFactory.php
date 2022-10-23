<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $categories = ['Health','Sports', 'Cars', 'Business', 'Politics', 'Technology', 'Languages', 'Education'];
        return [
            'category'  => $this->faker->unique()->randomElement($categories),
            'remarks'   => $this->faker->sentence()
        ];
    }
}
