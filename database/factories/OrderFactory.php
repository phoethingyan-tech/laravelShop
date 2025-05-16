<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'vochor_no' => $this->faker->ean8,
            'total' => $this->faker->randomFloat(2, 100, 10000),
            'qty' => $this->faker->numberBetween(1, 100),
            'payment_slip' => $this->faker->imageUrl(), // or word/sentence if it's just text
            'status' => $this->faker->randomElement(['pending', 'paid', 'cancelled']),
            'note' => $this->faker->sentence,
            'item_id' => rand(1, 20),
            'payment_id' => rand(1, 20),
            'user_id' => rand(1, 20),
        ];
    }
}
