<?php

declare(strict_types=1);

namespace Modules\Xot\Actions;

use Illuminate\Support\Str;
use Modules\Xot\Services\FileService;
use Spatie\QueueableAction\QueueableAction;
use Webmozart\Assert\Assert;

class GetViewAction
{
    use QueueableAction;

    /**
     * PER ORA FUNZIONA SOLO CON LIVEWIRE.
     */
    public function execute(string $tpl = '', string $file0 = ''): string
    {
        if ('' === $file0) {
            $backtrace = debug_backtrace();
            $file0 = FileService::fixpath($backtrace[0]['file'] ?? '');
        }

        $file0 = Str::after($file0, base_path());
        $arr = explode(DIRECTORY_SEPARATOR, $file0);

        if ('' === $arr[0]) {
            $arr = array_slice($arr, 1);
            $arr = array_values($arr);
        }

        $mod = $arr[1];
        $tmp = array_slice($arr, 3);

        $tmp = collect($tmp)->map(
            function ($item) {
                $item = str_replace('.php', '', $item);

                return Str::slug(Str::snake($item));
            }
        )->implode('.');

        $pub_view = 'pub_theme::'.$tmp;
        Assert::string($pub_view);

        if ('' !== $tpl) {
            $pub_view .= '.'.$tpl;
        }
        if (view()->exists($pub_view)) {
            return $pub_view;
        }

        $view = Str::lower($mod).'::'.$tmp;

        if ('' !== $tpl) {
            $view .= '.'.$tpl;
        }

        // if (inAdmin()) {
        if (Str::contains($view, '::panels.actions.')) {
            $to = '::'.(inAdmin() ? 'admin.' : '').'home.acts.';
            $view = Str::replace('::panels.actions.', $to, $view);
            $view = Str::replace('-action', '', $view);
        }

        // }
        Assert::string($view);
        if (! view()->exists($view)) {
<<<<<<< HEAD
<<<<<<< HEAD
            // throw new \Exception('View ['.$view.'] not found');
            dddx([
                'Views not found',
                $view,
                $pub_view,
            ]);
=======
            throw new \Exception('View ['.$view.'] not found');
>>>>>>> dev
=======
            throw new \Exception('View ['.$view.'] not found');
>>>>>>> dev
        }

        return $view;
    }
}
