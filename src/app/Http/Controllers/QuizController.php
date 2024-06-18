<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;
use App\Models\Pproduce;
use App\Models\Ppquestion;
use App\Models\Ppchoice;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index() {
        $quizzes = Quiz::all();
        $questions = Question::all();
        $choices = Answer::all();
        $pproduces = Pproduce::all();
        $ppquestions = Ppquestion::all();
        $ppchoices = Ppchoice::all();
        return view('quiz', compact('quizzes', 'questions', 'choices', 'pproduces', 'ppquestions', 'ppchoices')); //一応.blade.phpと同じ名前（？）
    }
}
