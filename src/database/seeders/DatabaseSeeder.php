<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Question;
use App\Models\Quiz;
use App\Models\Choice;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // Quiz::factory()
        //     ->count(3)
        //     ->hasQuestions(3)
        //     ->create();
        // 質問を作成し、それに対応する選択肢を3つずつ作成
        // Question::factory()
        //     ->count(3) // 作成する質問の数、Questionsから3つの質問を追加で作成する
        //     // なので全体で9つ + 3つの質問が作成される
        //     // 最後の3つに紐づく選択肢のみ作成される様な処理の流れになってしまっている
        //     ->hasChoices(3) // 各質問に3つの選択肢を関連付ける
        //     ->create();
        //\App\Models\Answer::factory(10)->create();

        Quiz::factory()
        ->count(3)
        ->create()
        // create()メソッドでは作成されたQuizモデルのCollectionが返されるのでforeach的な処理ができるeach()メソッドを使う
        ->each(function ($quiz) {
            // 各クイズに3つの質問を作成
            $questions = Question::factory()
                ->count(3)
                ->create(['quiz_id' => $quiz->id]);
            
            // 各質問に3つの選択肢を作成
            $questions->each(function ($question) {
                Choice::factory()
                    ->count(3)
                    ->create(['question_id' => $question->id]);
            });
        });


        \App\Models\Pproduce::factory()
            ->count(3)
            ->hasPpquestions(3)
            ->create();
        \App\Models\Ppquestion::factory()
            ->count(3)
            ->hasPpchoices(3)
            ->create();
        //\App\Models\Ppchoice::factory(10)->create();
    }
}
