<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;

trait HasImage
{
    /**
     * Set the image_path attribute.
     *
     * @param  string|UploadedFile $path
     * @return void
     */
    public function setImagePathAttribute($path)
    {
        $this->attributes['image_path'] = $path instanceof UploadedFile
            ? $path->store($this->getTable(), 'public')
            : $path;
    }

    /**
     * Get the publicly accessible image path.
     *
     * @return string
     */
    public function getPublicImagePathAttribute()
    {
        if ($this->image_path) {
            return asset("storage/{$this->image_path}");
        } elseif (property_exists($this, 'defaultImagePath')) {
            return asset($this->defaultImagePath);
        } else {
            return null;
        }
    }
}
