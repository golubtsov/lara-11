<?php

namespace Domain\Api\Models3D;

use Domain\Api\Files\File;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Notifications\DatabaseNotificationCollection;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;

/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property-read DatabaseNotificationCollection<int, DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|Model3D newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Model3D newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Model3D query()
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read File|null $file
 * @method static \Illuminate\Database\Eloquent\Builder|Model3D whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model3D whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model3D whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model3D whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Model3D extends Model
{
    use Notifiable;

    protected $table = 'models3d';

    protected $fillable = [
        'name',
    ];

    public function file(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable');
    }
}
