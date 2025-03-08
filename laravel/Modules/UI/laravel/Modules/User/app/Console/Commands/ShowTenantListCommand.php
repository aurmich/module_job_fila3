<?php

declare(strict_types=1);

namespace Modules\User\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Database\Eloquent\Model;
use Modules\Xot\Datas\XotData;
use Webmozart\Assert\Assert;

class ShowTenantListCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:tenant-list';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Visualizza lista tenant';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $modelClass = XotData::make()->getTenantClass();

        $map = static function (Model $row) {
            return $row->toArray();
        };

        $rows = $modelClass::get()->map($map);

        if (\count($rows) > 0) {
            $first = $rows[0];
            Assert::isArray($first);
            $headers = array_keys($first);

            $this->newLine();
            $this->table($headers, $rows);
            $this->newLine();
        } else {
            $this->newLine();
            $this->warn('⚡ No Tenants ['.$modelClass.']');
            $this->newLine();
        }
    }
}
