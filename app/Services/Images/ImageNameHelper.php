<?php


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
     * @param UploadedFile $file
     * @param Carbon|null $date
     * @return string
     */
    public function generateName(UploadedFile $file, Carbon $date = null): string
    {
        $date = $date ?? Carbon::now();
        $filename = $file->getClientOriginalName();
        $ext = $file->getClientOriginalExtension();

        return $date->format("ymdhms")."_".Str::slug(Str::lower($filename)).".$ext";
    }


}
