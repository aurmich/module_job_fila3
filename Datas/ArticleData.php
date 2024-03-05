<?php

declare(strict_types=1);

namespace Modules\Blog\Datas;

use Illuminate\Support\Collection;
use Modules\Blog\Models\Category;
use Spatie\LaravelData\Data;

class ArticleData extends Data
{
    public function __construct(
        public string $title,
        public string $slug,
        public int $category_id,
        public ?string $status,
        public bool $show_on_homepage,
        public string $published_at,
        public ?array $content_blocks,
        public ?array $sidebar_blocks,
        public ?array $footer_blocks,
        public ?Collection $categories,
        public ?string $url,
        // public string $class,
        // public string $articleId;
        // public string $ratingId;
        // public int $credit;
    ) {
        // $this->url = $this->getUrl();
        $this->categories = $this->getCategories();
    }

    public function getCategories(): Collection
    {
        return Category::find($this->category_id)->bloodline()->get()->reverse();
    }

    public function url(string $type): string
    {
        if($type == 'show'){
            return '/'.app()->getLocale().'/article/'.$this->slug;
        }

        if($type == 'edit'){
            return '/'.app()->getLocale().'/article/'.$this->slug.'/edit';
        }
    }
}
