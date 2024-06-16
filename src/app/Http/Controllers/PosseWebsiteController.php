<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PosseWebsiteController extends Controller
{
    public function index() {
        return view('posseWebsite'); //一応.blade.phpと同じ名前（？）
    }
}
