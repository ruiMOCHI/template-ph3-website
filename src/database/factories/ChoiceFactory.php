<?php

namespace Database\Factories;

use App\Models\Answer;
use App\Models\Choice;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Answer>
 */
class ChoiceFactory extends Factory
{
    protected $model = Choice::class;
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
            'is_correct' => $faker->boolean(),
            'question_id' => \App\Models\Question::factory(), // 既存のQuestionのIDを指定
        ];
    }
}
