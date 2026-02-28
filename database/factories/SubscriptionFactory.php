<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subscription>
 */
class SubscriptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "subscription_plan_id"=> $this->faker->numberBetween(1,5),
            "user_id"=> $this->faker->numberBetween(1,10),
            "start_date"=> $this->faker->date(),
            "end_date"=> $this->faker->date()

        ];
    }
}
