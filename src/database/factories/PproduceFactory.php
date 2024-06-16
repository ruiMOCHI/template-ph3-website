<?php

namespace Database\Factories;

use App\Models\Pproduce;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pproduce>
 */
class PproduceFactory extends Factory
{
    protected $model = Pproduce::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->text(50),
        ];
    }
}
