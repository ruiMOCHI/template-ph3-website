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
        Schema::create('ppchoices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ppquestion_id');
            $table->string('text')->comment('選択肢 ex.) tokyo');
            $table->boolean('is_correct');
            $table->timestamps();

            // 外部キー制約の追加
            $table->foreign('ppquestion_id')->references('id')->on('ppquestions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ppchoices', function (Blueprint $table) {
            // 外部キー制約を削除
            $table->dropForeign('ppquestion_id');
        });

        Schema::dropIfExists('ppchoices');
    }
};
