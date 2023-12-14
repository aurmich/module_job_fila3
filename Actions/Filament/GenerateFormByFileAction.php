<?php
<<<<<<< HEAD
<<<<<<< HEAD
/**
 * -WIP.
 */
=======
>>>>>>> 2934d64 (.)
=======
/**
 * -WIP.
 */
>>>>>>> 2104fd7 (Update code documentation and dependenciesCo-authored-by: nunomaduro <enunomaduro@gmail.com>)

declare(strict_types=1);

namespace Modules\Xot\Actions\Filament;

<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Str;

use function Safe\file;

use Spatie\QueueableAction\QueueableAction;
use Symfony\Component\Finder\SplFileInfo as File;
use Webmozart\Assert\Assert;

class GenerateFormByFileAction
{
=======
use ReflectionClass;
=======
>>>>>>> be0380e (Check & fix styling)
use Illuminate\Support\Str;

use function Safe\file;

use Spatie\QueueableAction\QueueableAction;
use Symfony\Component\Finder\SplFileInfo as File;

<<<<<<< HEAD
class GenerateFormByFileAction {
>>>>>>> 2934d64 (.)
=======
class GenerateFormByFileAction
{
>>>>>>> be0380e (Check & fix styling)
    use QueueableAction;

    /**
     * Undocumented function.
     * return number of input added.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function execute(File $file): int
    {
=======
    public function execute(File $file): int {
>>>>>>> 2934d64 (.)
=======
    public function execute(File $file): int
    {
>>>>>>> be0380e (Check & fix styling)
        if (! $file->isFile()) {
            return 0;
        }
        if (! in_array($file->getExtension(), ['php'])) {
            return 0;
        }

        $class_name = Str::replace(base_path('Modules/'), 'Modules/', $file->getPathname());
<<<<<<< HEAD
<<<<<<< HEAD
        Assert::string($class_name = Str::replace('/', '\\', $class_name));
        $class_name = Str::substr($class_name, 0, -4);
        $model_name = app($class_name)->getModel();
        $fillable = app($model_name)->getFillable();
        Assert::classExists($class_name);
        $reflection_class = new \ReflectionClass($class_name);
        $form_method = $reflection_class->getMethod('form');
=======
        $class_name = Str::replace('/','\\',$class_name);
=======
        $class_name = Str::replace('/', '\\', $class_name);
>>>>>>> be0380e (Check & fix styling)
        $class_name = Str::substr($class_name, 0, -4);
        $model_name = app($class_name)->getModel();
        $fillable = app($model_name)->getFillable();

<<<<<<< HEAD
        $reflection_class = new ReflectionClass($class_name); 
        $form_method=$reflection_class->getMethod('form');
>>>>>>> 2934d64 (.)
=======
        $reflection_class = new \ReflectionClass($class_name);
        $form_method = $reflection_class->getMethod('form');
>>>>>>> be0380e (Check & fix styling)

        $start_line = $form_method->getStartLine() - 1; // it's actually - 1, otherwise you wont get the function() block
        $end_line = $form_method->getEndLine();
        $length = $end_line - $start_line;
<<<<<<< HEAD
        Assert::string($file_name = $form_method->getFileName());
        // $contents= $file->getContents();
        $source = file($file_name);
        $body = implode('', array_slice($source, $start_line, $length));
=======

<<<<<<< HEAD
        //$contents= $file->getContents();
        $source=file($form_method->getFileName());
        $body = implode("", array_slice($source, $start_line, $length));
>>>>>>> 2934d64 (.)
=======
        // $contents= $file->getContents();
        $source = file($form_method->getFileName());
        $body = implode('', array_slice($source, $start_line, $length));
>>>>>>> be0380e (Check & fix styling)

        dd([
            'class_name' => $class_name,
            'model_name' => $model_name,
            'fillable' => $fillable,
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> be0380e (Check & fix styling)
            // 't1'=>app($class_name)->form(app(\Filament\Forms\Form::class)),
            'methods' => get_class_methods(app($class_name)),
            'form_method' => $form_method,
            'form_method_methods' => get_class_methods($form_method),
            'body' => $body,
<<<<<<< HEAD
        ]);
    }

    public function ddFile(File $file): void
    {
=======
            //'t1'=>app($class_name)->form(app(\Filament\Forms\Form::class)),
            'methods'=>get_class_methods(app($class_name)),
            'form_method'=>$form_method,
            'form_method_methods'=>get_class_methods($form_method),
            'body'=>$body,

        ]);
    }

    public function ddFile(File $file): void {
>>>>>>> 2934d64 (.)
=======
        ]);
    }

    public function ddFile(File $file): void
    {
>>>>>>> be0380e (Check & fix styling)
        dd([
            'getRelativePath' => $file->getRelativePath(), // =  ""
            'getRelativePathname' => $file->getRelativePathname(), //  AssenzeResource.php
            'getFilenameWithoutExtension' => $file->getFilenameWithoutExtension(), // AssenzeResource
            // 'getContents' => $file->getContents(),
            'getPath' => $file->getPath(), // = /var/www/html/ptvx/laravel/Modules/Progressioni/Filament/Resources
            'getFilename' => $file->getFilename(), // = AssenzeResource.php
            'getExtension' => $file->getExtension(), // php
            'getBasename' => $file->getBasename(), // AssenzeResource.php
            'getPathname' => $file->getPathname(), // "/var/www/html/ptvx/laravel/Modules/Progressioni/Filament/Resources/AssenzeResource.php
            'isFile' => $file->isFile(), // true
            'getRealPath' => $file->getRealPath(), // /var/www/html/ptvx/laravel/Modules/Progressioni/Filament/Resources/AssenzeResource.php
            // 'getFileInfo' => $file->getFileInfo(),
            // 'getPathInfo' => $file->getPathInfo(),
            'methods' => get_class_methods($file),
        ]);
    }
}
