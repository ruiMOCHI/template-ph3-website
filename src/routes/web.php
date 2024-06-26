<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PosseWebsiteController; //l34と同じ名前
use App\Http\Controllers\PproduceController;
use App\Http\Controllers\QuizController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/user', [UserController::class, 'index']);
Route::get('/posseWebsite', [PosseWebsiteController::class, 'index'])->name('posseweb'); //'/posseWebsite'は極論適当な名前でも大丈夫。しかし、ブラウザのURLは手動で変えなければならない。l6と同じ名前
//Route::get('/quizzes/1', [QuizController::class, 'index'])->name('quiz');
Route::get('/quizzes/{id}', [QuizController::class, 'show'])->name('quiz.show');
Route::get('/quizzes/sample/{id}', [QuizController::class, 'showSample'])->name('quiz.showSample');
// 本当はモデルとコントローラーが一緒に命名だと良さそうかも PPproduceController
Route::get('/pproduces/sample/{id}', [QuizController::class, 'showPproduceSample'])->name('pproduce.showSample');

require __DIR__.'/auth.php';
