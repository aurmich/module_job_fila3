<?php

declare(strict_types=1);

namespace Modules\Job\Filament\Pages;

<<<<<<< HEAD
use Filament\Pages\Page;
=======
>>>>>>> a8a9f0b7 (.)
use Modules\Xot\Filament\Pages\XotBaseDashboard;

class Dashboard extends XotBaseDashboard
{
    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static string $view = 'job::filament.pages.dashboard';

    // public function mount(): void {
    //     $user = auth()->user();
    //     if(!$user->hasRole('super-admin')){
    //         redirect('/admin');
    //     }
    // }
}
