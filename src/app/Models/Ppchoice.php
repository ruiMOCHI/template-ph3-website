<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ppchoice extends Model
{
    use HasFactory;

    protected $fillable = ['ppquestion_id', 'text', 'is_correct'];

    protected $table = 'ppchoices';

    public function ppquestion()
    {
        return $this->belongsTo(Ppquestion::class);
    }
}
