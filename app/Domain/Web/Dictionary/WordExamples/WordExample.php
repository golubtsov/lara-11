<?php

namespace Domain\Web\Dictionary\WordExamples;

use Illuminate\Database\Eloquent\Model;

class WordExample extends Model
{
    protected $fillable = [
        'word_id',
        'example',
        'translate',
    ];
}
