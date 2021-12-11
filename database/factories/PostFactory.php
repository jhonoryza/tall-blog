<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    public function definition(): array
    {
        return [
            'category_id' => Category::factory(),
            'title' => $this->faker->title,
            'desc' => $this->faker->paragraph(1),
            'body' => $this->faker->paragraph(5),
            'published_at' => now()->addDays(rand(1,3))
        ];
    }
}
