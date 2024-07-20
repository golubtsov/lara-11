<?php

namespace Domain\Web\Dictionary\Words;

use Domain\Web\Dictionary\WordExamples\WordExample;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 *
 *
 * @property int $id
 * @property string $word
 * @property string $translate
 * @property int $from
 * @property int $to
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Word newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Word newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Word query()
 * @method static \Illuminate\Database\Eloquent\Builder|Word whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Word whereFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Word whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Word whereTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Word whereTranslate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Word whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Word whereWord($value)
 * @mixin \Eloquent
 */
class Word extends Model
{
    protected $fillable = [
        'word',
        'translate',
        'from',
        'to',
    ];

    public function examples(): HasMany
    {
        return $this->hasMany(WordExample::class);
    }
}
