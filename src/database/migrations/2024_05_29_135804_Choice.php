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
        if (!Schema::hasTable('choices')) {
            Schema::create('choices', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('question_id');
                $table->string('text')->comment('選択肢 ex.) 約79万人');
                $table->boolean('is_correct');
                $table->timestamps();
        
                $table->foreign('question_id')->references('id')->on('questions')->onDelete('cascade');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('choices', function (Blueprint $table) {
            // 外部キー制約を削除
            $table->dropForeign(['question_id']);
        });

        Schema::dropIfExists('choices');
    }
};
