<?php

declare(strict_types=1);

namespace Modules\Xot\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Nwidart\Modules\Facades\Module as ModuleFacade;
use Sushi\Sushi;

/**
<<<<<<< HEAD
<<<<<<< HEAD
 *
 *
 * @property int $id
=======
>>>>>>> 78691f6 (🔧 (Module.php): resolve merge conflict by keeping the properties and methods from both branches)
=======
 * 
 *
>>>>>>> 7e41db0 (📝 (Models): Remove unnecessary empty lines and comments for better code readability and maintainability.)
 * @property int         $id
 * @property string|null $name
 * @property string|null $description
 * @property bool|null   $status
 * @property int|null    $priority
 * @property string|null $path
<<<<<<< HEAD
 *
<<<<<<< HEAD
 *
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $description
 * @property bool|null $status
 * @property int|null $priority
 * @property string|null $path
=======
>>>>>>> 78691f6 (🔧 (Module.php): resolve merge conflict by keeping the properties and methods from both branches)
=======
>>>>>>> 7e41db0 (📝 (Models): Remove unnecessary empty lines and comments for better code readability and maintainability.)
 * @method static \Illuminate\Database\Eloquent\Builder|Module newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Module newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Module query()
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Module wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Module wherePriority($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereStatus($value)
 * @mixin \Eloquent
 */
class Module extends Model
{
    use Sushi;

    protected $fillable = [
        'name',
        // 'alias',
        // 'description',
        'status',
        'priority',
        'path',
    ];

    protected function casts(): array
    {
        return [

        'status' => 'boolean',
        'priority' => 'integer',

       ];
    }

    /**
     * @return array
     */
    public function getRows()
    {
        $modules = ModuleFacade::all();
        $modules = Arr::map($modules, function ($module) {
            return [
                'name' => $module->getName(),
                // 'alias' => $module->getAlias(),
                'description' => $module->getDescription(),
                'status' => $module->isEnabled(),
                'priority' => $module->get('priority', 0),
                'path' => $module->getPath(),
            ];
        });

        return array_values($modules);
    }
}
