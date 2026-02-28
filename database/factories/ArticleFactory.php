<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(4),
            'topic' => $this->faker->word(),
            'category_id' => \App\Models\Category::inRandomOrder()->first()->id,
            'tag_id' => \App\Models\Tag::inRandomOrder()->first()->id,
            'text' => $this->faker->paragraphs(4, true),
        ];
    }
}
