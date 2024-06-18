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
        Schema::create('ppquestions', function (Blueprint $table) {
            $table->id();
            $table->string('from');
            $table->string('university');
            $table->string('animal');
            $table->unsignedBigInteger('pproduce_id');
            $table->timestamps();

            // 外部キー制約の追加
            $table->foreign('pproduce_id')->references('id')->on('ppproduces')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ppquestions', function (Blueprint $table) {
            // 外部キー制約を削除
            $table->dropForeign(['pproduce_id']);
        });

        Schema::dropIfExists('ppquestions');
    }
};
