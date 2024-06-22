<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ppquestion extends Model
{
    use HasFactory;

    protected $fillable = ['from', 'pproduce_id'];

    protected $table = 'ppquestions';

    /**
     * クイズとのリレーション
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pproduce()
    {
        return $this->belongsTo(Pproduce::class);
    }

    /**
     * 回答とのリレーション
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ppchoices()
    {
        return $this->hasMany(Ppchoice::class);
    }
}
