<?php

/**
 * ---.
 */

declare(strict_types=1);

namespace Modules\Job\Filament\Resources\JobManagerResource\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Facades\DB;
use Modules\Job\Models\JobManager;
use Modules\Job\Traits\FormatSeconds;

class JobStatsOverview extends BaseWidget
{
    use FormatSeconds;

    protected function getCards(): array
    {
        $aggregationColumns = [
            DB::raw('COUNT(*) as count'),
            DB::raw('SUM(finished_at - started_at) as total_time_elapsed'),
            DB::raw('AVG(finished_at - started_at) as average_time_elapsed'),
        ];

        $aggregatedInfo = JobManager::query()
            ->select($aggregationColumns)
            ->first();

        if ($aggregatedInfo) {
            $averageTime = ($aggregatedInfo->average_time_elapsed ?? null) !== null ? ceil((float) $aggregatedInfo->average_time_elapsed).'s' : '0';
            $totalTime = ($aggregatedInfo->total_time_elapsed ?? null) !== null ? $this->formatSeconds($aggregatedInfo->total_time_elapsed).'s' : '0';
        } else {
            $averageTime = '0';
            $totalTime = '0';
        }

        return [
            Stat::make((string) __('jobs::translations.total_jobs'), (int) ($aggregatedInfo->count ?? 0)),
            Stat::make((string) __('jobs::translations.execution_time'), (string) $totalTime),
            Stat::make((string) __('jobs::translations.average_time'), (string) $averageTime),
        ];
    }
}
