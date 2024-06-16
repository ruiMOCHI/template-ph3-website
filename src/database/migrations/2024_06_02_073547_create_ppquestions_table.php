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
        if (!Schema::hasTable('pproduces')) {
        Schema::create('ppquestions', function (Blueprint $table) {
            $table->id();
            $table->string('from');
            $table->string('university');
            $table->string('animal');
            $table->unsignedBigInteger('pproduce_id');
            $table->timestamps();

            $table->foreign('pproduce_id')->references('id')->on('pproduces')->onDelete('cascade');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ppquestions');
        // Schema::table('ppchoices', function (Blueprint $table) {
        //     $table->dropForeign('ppchoices_ppquestion_id_foreign');
        // });
    }
};
