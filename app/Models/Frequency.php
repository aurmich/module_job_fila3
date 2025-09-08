<?php

declare(strict_types=1);

namespace Modules\Job\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

// use Modules\Job\Models\Traits\HasParameters;
/**
 * Modules\Job\Models\Frequency.
 *
 * @property int $id
 * @property int $task_id
 * @property string $label
 * @property string $interval
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property Collection<int, \Modules\Job\Models\Parameter> $parameters
 * @property int|null $parameters_count
 * @property Task|null $task
 *
 * @method static \Modules\Job\Database\Factories\FrequencyFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Frequency newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Frequency newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Frequency query()
 * @method static \Illuminate\Database\Eloquent\Builder|Frequency whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Frequency whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Frequency whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Frequency whereInterval($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Frequency whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Frequency whereTaskId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Frequency whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Frequency whereUpdatedBy($value)
 *
 * @property \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property \Modules\Xot\Contracts\ProfileContract|null $updater
 *
 * @method static Frequency|null first()
 * @method static \Illuminate\Database\Eloquent\Collection<int, Frequency> get()
 * @method static Frequency create(array $attributes = [])
 * @method static Frequency firstOrCreate(array $attributes = [], array $values = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Frequency where(string|\Closure $column, mixed $operator = null, mixed $value = null, string $boolean = 'and')
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Frequency whereNotNull(string|\Illuminate\Contracts\Database\Query\Expression $columns)
 * @method static int count(string $columns = '*')
 *
 * @mixin IdeHelperFrequency
 * @mixin \Eloquent
 */
class Frequency extends BaseModel
{
    // use HasParameters;

    // protected $table = 'task_frequencies';

    protected $fillable = [
        'id',
        'label',
        'interval',
    ];

    public function task(): BelongsTo
    {
        return $this->belongsTo(Task::class);
    }

    public function parameters(): HasMany
    {
        return $this->hasMany(Parameter::class);
    }
}
