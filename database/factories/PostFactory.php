<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $id = rand(30, 600);
        $title = $this->faker->sentence();
        $image = 'https://picsum.photos/id/' . $id . '/700/600';

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'image' => $image,
            'description' => $this->faker->paragraph(200),
            'category_id' => Category::inRandomOrder()->first()->id,
            'user_id' => User::inRandomOrder()->first()->id,
            'published_at' => now(),
        ];
    }
}
