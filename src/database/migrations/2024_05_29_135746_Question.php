<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string('image')->comment('設問画像 ex.) /image/sample.jpg');
            $table->string('text')->comment('設問 ex.) 日本のIT人材が2030年には最大どれくらい不足すると言われているでしょうか？');
            $table->string('supplement')->nullable()->comment('設問補足');
            $table->unsignedBigInteger('quiz_id');
            $table->timestamps();

            $table->foreign('quiz_id')->references('id')->on('quizzes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('questions', function (Blueprint $table) {
            // 外部キー制約を削除
            $table->dropForeign(['quiz_id']);
        });

        Schema::dropIfExists('questions');

        // Schema::table('choices', function (Blueprint $table) {
        //     $table->dropForeign('choices_question_id_foreign');
        // });
    }
};
