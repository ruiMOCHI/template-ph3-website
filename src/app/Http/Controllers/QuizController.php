<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index() {
        $quizzes = Quiz::all();
        $questions = Question::all();
        $choices = Answer::all();
        return view('quiz', compact('quizzes')); //一応.blade.phpと同じ名前（？）
        return view('question', compact('questions'));
        return view('choice', compact('choices'));
    }
}
