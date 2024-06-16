<?php

namespace Database\Factories;

use App\Models\Ppchoice;
use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [
            'text' => fake()->text(50),
            'is_correct' => fake()->boolean(),
            'ppquestion_id' => \App\Models\Ppquestion::factory(), // 既存のQuestionのIDを指定
        ];
    }
}
