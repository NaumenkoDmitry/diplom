<?php


namespace App\Services\Images;

/**
 * Interface IImageService
 * @package App\Services\Images
 */
interface IImageService
{
    /**
     * @param string $imageSrc
     * @return mixed
     */
    public function save(string $imageSrc,  string $imageDest);

    /**
     * @param string $imageSrc
     * @return mixed
     */
    public function remove(string $imageSrc);

}
