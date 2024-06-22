<?php

namespace Database\Factories;

use App\Models\Ppquestion;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

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
        $faker = \Faker\Factory::create('ja_JP');
        return [
            'from' => fake()->realText(10),
            'pproduce_id' => \App\Models\Pproduce::factory(),
        ];
    }
}
