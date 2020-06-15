<?php


namespace App\Services\Images;


use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;


class ImageService implements IImageService
{
    protected $configs = [
        "small" => [100, 100],
        "middle" => [300, 300],
        "big" => [600, 600]
    ];
    protected $baseFolder = "public/images";

    /**
     * @inheritDoc
     */
    public function save(string $imageSrc, string $imageDest)
    {
        foreach ($this->configs as $path=>$config){
            $filename = $this->baseFolder.DIRECTORY_SEPARATOR.$path.DIRECTORY_SEPARATOR.$imageDest;
            if (Storage::put($filename, file_get_contents($imageSrc))){
              Image::make(Storage::path($filename))->resize($config[0],$config[1])->save();
            }
        }
    }

    /**
     * @inheritDoc
     */
    public function remove(string $imageSrc)
    {
        foreach ($this->configs as $path=>$config){
            $filename = $this->baseFolder.DIRECTORY_SEPARATOR.$path.DIRECTORY_SEPARATOR.$imageSrc;
            Storage::delete($filename);
        }
    }
}
