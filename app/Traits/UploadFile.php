<?php

namespace App\Traits;

use Illuminate\Support\Str;
use Buglinjo\LaravelWebp\Facades\Webp;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

trait UploadFile
{
    use DirectoryTrait;

    /**
     * Upload file using storeAs() function. Recommend for saving file in storage's symlink folder.
     *
     * @param  Illuminate\Support\Facades\Request::File $file - the uploaded file (e.g., $request->thumbnail)
     * @param  string $where - path you want to put the file at (e.g., "public/photos")
     * @param  string $identifier - custom identifier, adding custom string in front of the filename, required if this function is called twice in the same code to prevent generating duplicate filenames. (example, adding "thumbnail" will make generated file name like "thumbnail_filename_time().jpg")
     * @return array [$path, $savedFileName]
     */
    protected static function uploadFile($file, $where, $identifier = null)
    {
        $extension = !in_array($file->getClientOriginalExtension(), ['jpg', 'jpeg', 'png', 'gif', 'webp']) ? $file->getClientOriginalExtension() : 'webp';
        $filename  = null;

        for ($i = 1; $i <= rand(50, 100); $i++) {

            $number     = random_int(0, 36);
            $character  = base_convert($number, 10, 36);
            $filename  .= $character;
        }

        if ($identifier) {

            $savedFileName = $identifier . '_' . $filename  . '.' . $extension;
        } else {

            $savedFileName = $filename  . '.' . $extension;
        }

        DirectoryTrait::createDirectory($where);

        if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif'])) {

            $new_file = Webp::make($file);
            $path     = $new_file->save(storage_path("app{$where}/{$savedFileName}"));
        } else {

            $path = $file->storeAs($where, $savedFileName);
        }

        return [$path, $savedFileName];
    }

    /**
     * Upload file from URL using storeAs() function. Recommend for saving file in storage's symlink folder.
     *
     * @param  Illuminate\Support\Facades\Request::File $file - the uploaded file (e.g., $request->thumbnail)
     * @param  string $where - path you want to put the file at (e.g., "partner/bg_photo")
     * @param  string $identifier - custom identifier, adding custom string in front of the filename, required if this function is called twice in the same code to prevent generating duplicate filenames. (example, adding "thumbnail" will make generated file name like "thumbnail_filename_time().jpg")
     * @return array [$path, $savedFileName]
     */
    protected static function uploadImageFromUrl($url, $where, $identifier = null)
    {
        $filename  = null;

        for ($i = 1; $i <= rand(50, 100); $i++) {

            $number     = random_int(0, 36);
            $character  = base_convert($number, 10, 36);
            $filename  .= $character;
        }

        if ($identifier) {

            $savedFileName = $identifier . '_' . $filename  . '.webp';
        } else {

            $savedFileName = $filename  . '.' . '.webp';
        }

        $image_file = file_get_contents($url);

        if (!$image_file) {
            return false;
        }

        DirectoryTrait::createDirectory($where);

        $is_saved   = Storage::put("$where/$savedFileName", $image_file);

        return [$is_saved, $savedFileName];
    }

    /**
     * Creating Directory if not exist using File::isDirectory() & File::makeDirectory() function. this function will creating the folder only if the folder does not exist.
     *
     * @param  string $path - path of the folder, it will use public_path("storage/$path") (e.g., "public/photos")
     * @param  string $identifier - custom identifier, adding custom string in front of the filename, required if this function is called twice in the same code to prevent generating duplicate filenames. (example, adding "thumbnail" will make generated file name like "thumbnail_filename_time().jpg")
     * @return array [$path, $savedFileName]
     */
    public function createDirectory($path)
    {
        $path = public_path("storage/$path");

        if (!File::isDirectory($path)) {
            File::makeDirectory($path, 0777, true, true);
        }
    }
}
