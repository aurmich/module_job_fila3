<?php

declare(strict_types=1);

namespace Modules\Media\View\Components\Media;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\View\Component;
use Modules\Cms\Actions\GetViewAction;

class Upload extends Component
{
    public array $media;
    public string $tpl = 'v1';

    public ?string $propertiesView = null;

    public function __construct(
        public string $name,
        public string $rules = '',
        public bool $multiple = false,
        public bool $editableName = false,
        public ?int $maxItems = null,
        public ?string $componentView = null,
        public ?string $listView = null,
        public ?string $itemView = null,
        string $propertiesView = null,
        public ?string $fieldsView = null
    ) {
        $media = old($name) ?? [];
        if (! is_array($media)) {
            $media = [];
        }
        $this->media = $media;
        $this->propertiesView = $propertiesView ?? 'media::livewire.partials.attachment.properties';
    }

   /* public function render()
    {
        return view('media::components.media-library-attachment');
    }*/

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): Renderable
    {
        /**
         * @phpstan-var view-string
         */
        $view = app(GetViewAction::class)->execute($this->tpl);
        $view_params = [
            'view' => $view,
        ];

        return view($view, $view_params);
    }

    public function determineListViewName(): string
    {
        if (! is_null($this->listView)) {
            return $this->listView;
        }

        return 'media::livewire.partials.attachment.list';
    }

    public function determineItemViewName(): string
    {
        if (! is_null($this->itemView)) {
            return $this->itemView;
        }

        return 'media::livewire.partials.attachment.item';
    }

    public function determineFieldsViewName(): string
    {
        if (! is_null($this->fieldsView)) {
            return $this->fieldsView;
        }

        return 'media::livewire.partials.attachment.fields';
    }

    public function determineMaxItems(): ?int
    {
        return $this->multiple
            ? $this->maxItems
            : 1;
    }
}
