<?php

declare(strict_types=1);

namespace Modules\Job\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Collection;
use Modules\Xot\Traits\Updater;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Class Task.
 *
 * @property int $id
 * @property string $title
 * @property string|null $description
 * @property string $status
 * @property int|null $assigned_to
 * @property int|null $created_by
 * @property \Carbon\Carbon|null $due_date
 * @property \Carbon\Carbon|null $completed_at
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property \Carbon\Carbon|null $deleted_at
 * @property-read \Modules\User\Models\User|null $assignedUser
 * @property-read \Modules\User\Models\User|null $createdByUser
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Modules\Job\Models\TaskComment> $comments
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Activitylog\Models\Activity> $activities
 */
class Task extends Model
{
    use HasFactory;
    use LogsActivity;
    use SoftDeletes;
    use Updater;

    protected $table = 'tasks';

    protected $fillable = [
        'title',
        'description',
        'status',
        'assigned_to',
        'created_by',
        'due_date',
        'completed_at',
    ];

    protected $casts = [
        'due_date' => 'datetime',
        'completed_at' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly([
                'title',
                'description',
                'status',
                'assigned_to',
                'created_by',
                'due_date',
                'completed_at',
            ])
            ->logOnlyDirty()
            ->dontSubmitEmptyLogs();
    }

    public function assignedUser(): BelongsTo
    {
        return $this->belongsTo(\Modules\User\Models\User::class, 'assigned_to');
    }

    public function createdByUser(): BelongsTo
    {
        return $this->belongsTo(\Modules\User\Models\User::class, 'created_by');
    }

    public function comments(): HasMany
    {
        return $this->hasMany(TaskComment::class);
    }

    public function scopePending(Collection $query): Collection
    {
        return $query->where('status', 'pending');
    }

    public function scopeInProgress(Collection $query): Collection
    {
        return $query->where('status', 'in_progress');
    }

    public function scopeCompleted(Collection $query): Collection
    {
        return $query->where('status', 'completed');
    }

    public function scopeOverdue(Collection $query): Collection
    {
        return $query->where('due_date', '<', now())
            ->where('status', '!=', 'completed');
    }

    public function isOverdue(): bool
    {
        return $this->due_date && $this->due_date->isPast() && $this->status !== 'completed';
    }

    public function isCompleted(): bool
    {
        return $this->status === 'completed';
    }

    public function markAsCompleted(): void
    {
        $this->update([
            'status' => 'completed',
            'completed_at' => now(),
        ]);
    }

    public function markAsInProgress(): void
    {
        $this->update([
            'status' => 'in_progress',
        ]);
    }

    public function markAsPending(): void
    {
        $this->update([
            'status' => 'pending',
        ]);
    }
}
