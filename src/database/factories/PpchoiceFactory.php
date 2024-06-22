<?php

namespace Database\Factories;

use App\Models\Ppchoice;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ppchoice>
 */
class PpchoiceFactory extends Factory
{
    protected $model = Ppchoice::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create('ja_JP');

        return [
            'text' => fake()->realText(10),
            'is_correct' => fake()->boolean(),
            'ppquestion_id' => \App\Models\Ppquestion::factory(),
        ];
    }
}
