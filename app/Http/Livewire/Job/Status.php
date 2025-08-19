<?php

declare(strict_types=1);

namespace Modules\Job\Http\Livewire\Job;

use Exception;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Livewire\Component;
use Modules\Job\Actions\DummyAction;
use Modules\Job\Models\FailedJob as FailedJobModel;
use Modules\Job\Models\Job as JobModel;
use Modules\Job\Models\JobBatch as JobBatchModel;
use Modules\Xot\Actions\GetViewAction;
use Webmozart\Assert\Assert;

use function Safe\putenv;

/**
 * Class Status.
 */
class Status extends Component
{
    /** @var array<string, mixed> */
    public array $form_data = [];

    public string $out = '';

    public string $old_value = '';

    public function mount(): void
    {
        Artisan::call('queue:monitor', ['queues' => 'default,queue01,emails']);
        $this->out .= Artisan::output();
        Artisan::call('worker:check');
        $this->out .= Artisan::output();

        $this->out .= '<br/>['.JobModel::query()->count().'] Jobs';
        $this->out .= '<br/>['.FailedJobModel::query()->count().'] Failed Jobs';
        $this->out .= '<br/>['.JobBatchModel::query()->count().'] Job Batch';
        $queue_conn = getenv('QUEUE_CONNECTION');
        if ($queue_conn === false) {
            throw new Exception('['.__LINE__.']['.class_basename($this).']');
        }

        $this->old_value = $queue_conn;
        $this->form_data['conn'] = $queue_conn;
    }

    public function render(): Renderable
    {
        $view = app(GetViewAction::class)->execute();

        $acts = [
            (object) [
                'name' => 'clear',
                'label' => 'Delete all of the jobs from the specified queue',
            ],
            (object) [
                'name' => 'failed',
                'label' => 'List all of the failed queue jobs',
            ],
            (object) [
                'name' => 'flush',
                'label' => 'Flush all of the failed queue jobs',
            ],
            (object) [
                'name' => 'prune-batches',
                'label' => 'Prune stale entries from the batches database',
            ],
            (object) [
                'name' => 'prune-failed',
                'label' => ' Prune stale entries from the failed jobs table',
            ],
            (object) [
                'name' => 'restart',
                'label' => 'Restart queue worker daemons after their current job',
            ],
            (object) [
                'name' => 'retry',
                'label' => 'Retry a failed queue job',
            ],
        ];

        $view_params = [
            'view' => $view,
            'acts' => $acts,
        ];

        return view($view, $view_params);
    }

    public function updatedFormData(string $value, string $key): void
    {
        if ($key === 'conn') {
            $this->saveEnv();
        }
    }

    public function saveEnv(): void
    {
        $env_file = base_path('.env');
        $env_content = File::get($env_file);
        $new_content = Str::replace(
            'QUEUE_CONNECTION='.$this->old_value,
            'QUEUE_CONNECTION='.$this->form_data['conn'],
            $env_content
        );
        putenv('QUEUE_CONNECTION='.$this->form_data['conn']);
        Assert::string($new_content, '['.__LINE__.']['.class_basename($this).']');
        File::put($env_file, $new_content);
        $this->old_value = $this->form_data['conn'];
    }

    public function artisan(string $cmd): void
    {
        $this->out .= '<hr/>';
        Artisan::call('queue:'.$cmd);
        $this->out .= Artisan::output();
        $this->out .= '<hr/>';
    }

    public function dummyAction(): void
    {
        for ($i = 0; $i < 1000; $i++) {
            app(DummyAction::class)
                ->onQueue()
                ->execute();
        }

        session()->flash('message', '1000 dummy Action');
    }
}
