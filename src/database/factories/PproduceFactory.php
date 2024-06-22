<?php

namespace Database\Factories;

use App\Models\Pproduce;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

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
        $faker = \Faker\Factory::create('ja_JP');
        return [
            'name' => fake()->realText(10),
        ];
    }
}
