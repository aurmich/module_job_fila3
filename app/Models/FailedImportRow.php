<?php

/**
 * ---.
 */

declare(strict_types=1);

namespace Modules\Job\Models;

/**
 * @method static \Modules\Job\Database\Factories\FailedImportRowFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|FailedImportRow newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FailedImportRow newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FailedImportRow query()
 *
 * @property int $id
 * @property array $data
 * @property int $import_id
 * @property string|null $validation_error
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $updated_by
 * @property string|null $created_by
 *
 * @method static \Illuminate\Database\Eloquent\Builder|FailedImportRow whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FailedImportRow whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FailedImportRow whereData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FailedImportRow whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FailedImportRow whereImportId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FailedImportRow whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FailedImportRow whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FailedImportRow whereValidationError($value)
 *
 * @property \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property \Modules\Xot\Contracts\ProfileContract|null $updater
 *
 * @method static FailedImportRow|null first()
 * @method static \Illuminate\Database\Eloquent\Collection<int, FailedImportRow> get()
 * @method static FailedImportRow create(array $attributes = [])
 * @method static FailedImportRow firstOrCreate(array $attributes = [], array $values = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FailedImportRow where(string|\Closure $column, mixed $operator = null, mixed $value = null, string $boolean = 'and')
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FailedImportRow whereNotNull(string|\Illuminate\Contracts\Database\Query\Expression $columns)
 * @method static int count(string $columns = '*')
 *
 * @mixin IdeHelperFailedImportRow
 * @mixin \Eloquent
 */
class FailedImportRow extends BaseModel
{
    protected $fillable = [
        'id',
        'data',
        'import_id',
        'validation_error',
    ];

    protected function casts(): array
    {
        return [
            'id' => 'string',
            'uuid' => 'string',
            'data' => 'json',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',

            'updated_by' => 'string',
            'created_by' => 'string',
            'deleted_by' => 'string',

            'payload' => 'array',
            'completed_at' => 'datetime',
            // 'updated_at' => 'datetime:Y-m-d H:00',
            // 'created_at' => 'datetime:Y-m-d',
            // 'created_at' => 'datetime:d/m/Y H:i'
        ];
    }
}
