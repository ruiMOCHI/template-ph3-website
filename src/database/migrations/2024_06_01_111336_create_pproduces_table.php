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
        // Schema::create('pproduces', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('name')->comment('カテゴライズしたクイズ名 ex.) 自己紹介クイズ');
        //     $table->timestamps();
        // });
        if (!Schema::hasTable('pproduces')) {
            Schema::create('pproduces', function (Blueprint $table) {
                $table->id();
                $table->string('name')->comment('カテゴライズしたクイズ名 ex.) 自己紹介クイズ');
                $table->timestamps();
            });
        }
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pproduces');
        // Schema::table('ppquestions', function (Blueprint $table) {
        //     $table->dropForeign('ppquestions_pproduce_id_foreign');
        // });
    }
};
