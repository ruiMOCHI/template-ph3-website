<?php

namespace Database\Factories;

use App\Models\Ppquestion;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ppquestion>
 */
class PpquestionFactory extends Factory
{
    protected $model = Ppquestion::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'from' => fake()->text(50),
            'university' => fake()->text(50),
            'animal' => fake()->text(50),
            'pproduce_id' => \App\Models\Pproduce::factory(),
        ];
    }
}
