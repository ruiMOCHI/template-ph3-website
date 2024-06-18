<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        \App\Models\Quiz::factory(1)->create();
        // 質問を作成し、それに対応する選択肢を3つずつ作成
        \App\Models\Question::factory()
            ->count(10) // 作成する質問の数
            ->hasChoices(3) // 各質問に3つの選択肢を関連付ける
            ->create();
        \App\Models\Answer::factory(10)->create();
        \App\Models\Pproduce::factory(1)->create();
        \App\Models\Ppquestion::factory(10)->create();
        \App\Models\Ppchoice::factory(10)->create();
    }
}
