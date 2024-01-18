<?php

declare(strict_types=1);

namespace Modules\Media\Services;

use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

use function Safe\file_put_contents;
use function Safe\fopen;
use function Safe\realpath;
use function Safe\simplexml_load_string;

/**
 * SubtitleService.
 */
class SubtitleService
{
    private static ?self $instance = null;

    public string $disk = 'media';

    // nome che usa storage
    public string $file_path;

    // siamo in subtitle, percio' il file e' dei subtitle
    public string $field_name = 'txt';

    public array $subtitles = [];

    public Model $model;

    /**
     * ---.
     */
    public static function getInstance(): self
    {
<<<<<<< HEAD
<<<<<<< HEAD
        if (! self::$instance instanceof SubtitleService) {
            self::$instance = new self;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if (! self::$instance instanceof SubtitleService) {
            self::$instance = new self;
=======
        if (! self::$instance instanceof \Modules\Media\Services\SubtitleService) {
            self::$instance = new self();
>>>>>>> 771f698d (first)
=======
        if (! self::$instance instanceof SubtitleService) {
            self::$instance = new self;
>>>>>>> 7cc85766 (rebase 1)
=======
        if (! self::$instance instanceof SubtitleService) {
            self::$instance = new self;
>>>>>>> 76f3bf5f (first)
>>>>>>> 6444d42f (rebase 7)
=======
        if (! self::$instance instanceof SubtitleService) {
            self::$instance = new self;
>>>>>>> 2f59e24c (.)
        }

        return self::$instance;
    }

    /**
     * ---.
     */
    public static function make(): self
    {
        return static::getInstance();
    }

    public function setFilePath(string $file_path): static
    {
        $this->file_path = $file_path;

        return $this;
    }

    public function setModel(Model $model): static
    {
        $this->model = $model;

        return $this;
    }

    public function getModel(): Model
    {
        return $this->model;
    }

    public function upateModel(): static
    {
        $plain = $this->getPlain();
        $up = [$this->field_name => $plain];
        $this->model = tap($this->model)->update($up);

        return $this;
    }

    /**
     * Undocumented function.
     */
    public function getPlain(): string
    {
        $content = $this->getContent();
        $xmlObject = simplexml_load_string($content);
        $txt = '';
        foreach ($xmlObject->annotation->type->sentence as $sentence) {
            foreach ($sentence->item as $item) {
                $txt .= $item->__toString().' ';
            }
        }

        return $txt;
    }

    /**
     * restituisce i sottotitoli, dal file ..
     */
    public function get(): array
    {
        $info = pathinfo($this->file_path);
        if (! isset($info['extension'])) {
            return [];
        }

        $func = 'getFrom'.Str::studly($info['extension']);

        return $this->{$func}();
    }

    /**
     * Undocumented function.
     */
    public function getContent(): string
    {
        // $path = Storage::disk($this->disk)->path('videos/'.$this->file_path);
        // $path = Storage::path($this->file_path);
        // $path = realpath($path);
        $path = realpath($this->file_path);
<<<<<<< HEAD
<<<<<<< HEAD
        if ($path == false) {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if ($path == false) {
=======
        if (false == $path) {
>>>>>>> 771f698d (first)
=======
        if ($path == false) {
>>>>>>> 7cc85766 (rebase 1)
=======
        if ($path == false) {
>>>>>>> 76f3bf5f (first)
>>>>>>> 6444d42f (rebase 7)
=======
        if ($path == false) {
>>>>>>> 2f59e24c (.)
            return '';
            /*
            throw new Exception('path:['.$path.']'.PHP_EOL.'
                file_path:['.$this->file_path.']'.PHP_EOL.'
                ['.__LINE__.']['.__FILE__.']'.PHP_EOL);
            */
        }

        return File::get($path);
    }

    /**
     * @return (float|int|mixed|string)[][]
     *
     * @psalm-return list{0?: array{sentence_i: int<0, max>, item_i: int<0, max>, start: float|int, end: float|int, time: string, text: mixed},...}
     */
    public function getFromXml(): array
    {
        $this->subtitles = [];
        $content = $this->getContent();
        $xmlObject = simplexml_load_string($content);

        $data = [];
        $sentence_i = 0;
        foreach ($xmlObject->annotation->type->sentence as $sentence) {
            $item_i = 0;
            foreach ($sentence->item as $item) {
                $attributes = $item->attributes();

                if (! $attributes instanceof \SimpleXMLElement) {
<<<<<<< HEAD
<<<<<<< HEAD
                    throw new Exception('['.__LINE__.']['.__FILE__.']');
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                    throw new Exception('['.__LINE__.']['.__FILE__.']');
=======
                    throw new \Exception('['.__LINE__.']['.__FILE__.']');
>>>>>>> 771f698d (first)
=======
                    throw new Exception('['.__LINE__.']['.__FILE__.']');
>>>>>>> 7cc85766 (rebase 1)
=======
                    throw new Exception('['.__LINE__.']['.__FILE__.']');
>>>>>>> 76f3bf5f (first)
>>>>>>> 6444d42f (rebase 7)
=======
                    throw new Exception('['.__LINE__.']['.__FILE__.']');
>>>>>>> 2f59e24c (.)
                }

                // 00:06:35,360
                $start = (int) $attributes->start->__toString() / 1000;
                $end = (int) $attributes->end->__toString() / 1000;
                // dddx([$start,$this->secondsToHms($start),$end,$this->secondsToHms($end)]);
                $tmp = [
                    // 'id' => $i++,
                    'sentence_i' => $sentence_i,
                    'item_i' => $item_i,
                    'start' => $start,
                    'end' => $end,
                    'time' => secondsToHms($start).','.secondsToHms($end),
                    'text' => $item->__toString(),
                ];
                $data[] = $tmp;
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 76f3bf5f (first)
>>>>>>> 6444d42f (rebase 7)
=======
>>>>>>> 2f59e24c (.)
                $item_i++;
            }

            $sentence_i++;
<<<<<<< HEAD
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
                ++$item_i;
            }

            ++$sentence_i;
>>>>>>> 771f698d (first)
=======
                $item_i++;
            }

            $sentence_i++;
>>>>>>> 7cc85766 (rebase 1)
=======
>>>>>>> 76f3bf5f (first)
>>>>>>> 6444d42f (rebase 7)
=======
>>>>>>> 2f59e24c (.)
        }

        return $data;
    }

    /**
     * Undocumented function.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param string $srtFile
     * @param string $webVttFile
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $srtFile
     * @param  string  $webVttFile
=======
     * @param string $srtFile
     * @param string $webVttFile
>>>>>>> 771f698d (first)
=======
     * @param  string  $srtFile
     * @param  string  $webVttFile
>>>>>>> 7cc85766 (rebase 1)
=======
     * @param  string  $srtFile
     * @param  string  $webVttFile
>>>>>>> 76f3bf5f (first)
>>>>>>> 6444d42f (rebase 7)
=======
     * @param  string  $srtFile
     * @param  string  $webVttFile
>>>>>>> 2f59e24c (.)
     */
    public function srtToVtt($srtFile, $webVttFile): void
    {
        $fileHandle = fopen(public_path($srtFile), 'r');
        $lines = [];
        if ($fileHandle) {
            // $lines = [];
            while (($line = fgets($fileHandle, 8192)) !== false) {
                $lines[] = $line;
            }

            if (! feof($fileHandle)) {
                exit("Error: unexpected fgets() fail\n");
            }

            // ($fileHandle);
        }

        $length = \count($lines);
<<<<<<< HEAD
<<<<<<< HEAD
        for ($index = 1; $index < $length; $index++) {
            if ($index === 1 || trim($lines[$index - 2]) === '') {
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        for ($index = 1; $index < $length; $index++) {
            if ($index === 1 || trim($lines[$index - 2]) === '') {
=======
        for ($index = 1; $index < $length; ++$index) {
            if (1 === $index || '' === trim($lines[$index - 2])) {
>>>>>>> 771f698d (first)
=======
        for ($index = 1; $index < $length; $index++) {
            if ($index === 1 || trim($lines[$index - 2]) === '') {
>>>>>>> 7cc85766 (rebase 1)
=======
        for ($index = 1; $index < $length; $index++) {
            if ($index === 1 || trim($lines[$index - 2]) === '') {
>>>>>>> 76f3bf5f (first)
>>>>>>> 6444d42f (rebase 7)
=======
        for ($index = 1; $index < $length; $index++) {
            if ($index === 1 || trim($lines[$index - 2]) === '') {
>>>>>>> 2f59e24c (.)
                $lines[$index] = str_replace(',', '.', $lines[$index]);
            }
        }

        $header = "WEBVTT\n\n";

        file_put_contents(public_path($webVttFile), $header.implode('', $lines));
    }
}
