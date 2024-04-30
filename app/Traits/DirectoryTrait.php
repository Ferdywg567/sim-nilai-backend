<?php

namespace App\Traits;

use Illuminate\Support\Facades\File;

trait DirectoryTrait
{
    /**
     * Creating Directory if not exist using File::isDirectory() & File::makeDirectory() function. this function will creating the folder only if the folder does not exist.
     *
     * @param  string $path - path of the folder, it will use public_path() (e.g., "partner/photos")
     * @return array [$path, $savedFileName]
     */
    public static function createDirectory($path)
    {
        $path = public_path("storage/$path");

        if (!File::isDirectory($path)) {
            File::makeDirectory($path, 0755, true, true);
        }
    }
}
