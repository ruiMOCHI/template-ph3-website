<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\Pproduce;
// use App\Models\Ppquestion;
// use App\Models\Ppchoice;

// class PproduceController extends Controller
// {
//     public function index() {
//         $ppquestions = Ppquestion::with('ppchoices')->get();
//         $pproduces = Pproduce::all();
//         $ppquestions = Ppquestion::all();
//         $ppchoices = Ppchoice::all();
//         return view('quiz', compact('pproduces', 'ppquestions'));
//     }

//     public function show($id) {
//         $pproduce = Pproduce::findOrFail($id);
//         $pproduces = Pproduce::all(); // 追加
//         //$pproduces = Pproduce::where('pproduce_id', $id)->get();
//         $ppquestions = Ppquestion::where('pproduce_id', $id)->with('ppchoices')->get();
//         return view('quiz', compact('pproduces', 'ppquestions'));
//     }
// }
