<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $fillable = ['question_id', 'text', 'is_correct'];//bladeでの出力時にカラム名に注意//

    protected $table = 'choices';

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
