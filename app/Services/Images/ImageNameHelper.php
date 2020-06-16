<?php
declare(strict_types=1);

namespace App\Services\Images;


use Carbon\Carbon;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

class ImageNameHelper
{
    protected $basePath;

    public function __construct($basePath = '')
    {
        $this->basePath = $basePath;
    }

    /**
     * @param UploadedFile|string $file
     * @param Carbon|null $date
     * @return string
     */
    public function generateName($file, Carbon $date = null): string
    {
        $date = $date ?? Carbon::now();
        $result = '';
        if ($file instanceof UploadedFile) {
            $date = $date ?? Carbon::now();
            $filename = $file->getClientOriginalName();
            $ext = $file->getClientOriginalExtension();
            $result = $date->format("YmdHis")."_".Str::slug(Str::lower($filename)).".$ext";
        } else {
            $result = $date->format("YmdHisu")."_".Str::slug(Str::lower($file));
        }
        return $result;
    }



}
