<?php

declare(strict_types=1);

namespace Modules\Job\Http\Livewire;

use Illuminate\Contracts\Support\Renderable;
use Livewire\Component;
use Modules\Job\Events\PublicEvent;
use Modules\Xot\Actions\GetViewAction;

class Broad extends Component
{
    /** @var array<string, string> */
    protected $listeners = [
        'echo:public,PublicEvent' => 'notifyEvent',
    ];

    public function render(): Renderable
    {
        $view = app(GetViewAction::class)->execute();

        return view($view);
    }

    public function try(): void
    {
<<<<<<< HEAD
        session()->flash('message', 'try [' . now() . ']');
=======
        session()->flash('message', 'try ['.now().']');
>>>>>>> 1b7d3cd (.)
        // OrderShipped::dispatch();
        // event(new PublicEvent('test'));
        PublicEvent::dispatch();
    }

    public function notifyEvent(): never
    {
<<<<<<< HEAD
        session()->flash('message', 'notifyEvent [' . now() . ']');
        dd('fine');

=======
        session()->flash('message', 'notifyEvent ['.now().']');
        dd('fine');
>>>>>>> 1b7d3cd (.)
        // $this->showNewOrderNotification = true;
    }
}
