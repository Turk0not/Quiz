<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Question extends Model
{
    use HasFactory;

    protected $fillable=['question',
        'answer1',
        'answer2',
        'answer3',
        'answer4',
        'correct_answer',
        'image'];

    public function my_answer()
    {
        return $this->hasOne('App\Models\Answer')->where('user_id', auth()->user()->id);
    }
}
