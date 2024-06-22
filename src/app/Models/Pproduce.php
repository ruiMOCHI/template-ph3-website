<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pproduce extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    protected $table = 'pproduces';

    public function ppquestion()
    {
        return $this->hasMany(Ppquestion::class);
    }
    /**
     * 回答とのリレーション
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ppquestions()
    {
        return $this->hasMany(Ppquestion::class);
    }
}
