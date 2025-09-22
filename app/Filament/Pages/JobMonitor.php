<?php

declare(strict_types=1);

namespace Modules\Job\Filament\Pages;

use Filament\Pages\Page;
use Modules\Xot\Filament\Traits\NavigationLabelTrait;

class JobMonitor extends Page
{
    use NavigationLabelTrait;

<<<<<<< HEAD
    protected static null|string $navigationIcon = 'heroicon-o-computer-desktop';
=======
    protected static ?string $navigationIcon = 'heroicon-o-computer-desktop';
>>>>>>> 1b7d3cd (.)

    protected static string $view = 'job::filament.pages.job-monitor';

    // public function mount(): void {
    //     $user = auth()->user();
    //     if(!$user->hasRole('super-admin')){
    //         redirect('/admin');
    //     }
    // }
}
