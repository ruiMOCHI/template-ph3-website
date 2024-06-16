<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pproduce;

class PproduceController extends Controller
{
    public function index() {
        $pproduces = Pproduce::all();
        return view('pproduce', compact('pproduces')); //一応.blade.phpと同じ名前（？）
    }
}
