<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\Question;
use App\Models\Choice;
use App\Models\Pproduce;
use App\Models\Ppquestion;
use App\Models\Ppchoice;

use Illuminate\Http\Request;

class QuizController extends Controller
{

    public function index()
    {
        $quizzes = Quiz::all();
        $questions = Question::with('choices')->get();
        $questions = Question::all();
        $choices = Choice::all();

        $pproduces = Pproduce::all();
        $ppquestions = Ppquestion::with('ppchoices')->get();
        $ppquestions = Ppquestion::all();
        $ppchoices = Ppchoice::all();
        return view('quiz', compact('quizzes', 'questions', 'pproduces', 'ppquestions'));
    }

    public function show($id)
    {
        // クイズが存在する場合
        $quiz = Quiz::find($id);
        if ($quiz) {
            // $quizzesはこの後利用しないので、コメントアウト
            // $quizzes = Quiz::all();
            $questions = Question::where('quiz_id', $id)->with('choices')->get();
            return view('quiz', compact('quiz', 'questions'));
        }

        // プロデュースが存在する場合
        $pproduce = Pproduce::find($id);
        if ($pproduce) {
            $pproduces = Pproduce::all();
            $ppquestions = Ppquestion::where('pproduce_id', $id)->with('ppchoices')->get();
            return view('quiz', compact('pproduces', 'ppquestions'));
        }
        // どちらも存在しない場合は404エラー
        abort(404);
    }
}
