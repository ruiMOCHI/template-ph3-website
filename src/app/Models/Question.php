<?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Question extends Model
// {
//     use HasFactory;

//     protected $fillable = ['image', 'text', 'supplement', 'quiz_id'];

//     protected $table = 'questions';

//     public function quiz()
//     {
//         return $this->belongsTo(Quiz::class);
//     }
//     public function answer()
//     {
//         return $this->hasMany(Answer::class);
//     }
// }

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    // テーブルのカラムを指定
    protected $fillable = ['image', 'text', 'supplement', 'quiz_id'];

    // テーブル名を指定
    protected $table = 'questions';

    /**
     * クイズとのリレーション
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }

    /**
     * 回答とのリレーション
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}

