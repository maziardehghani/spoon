<?php

namespace App\Trait;

use App\Models\Media;
use Illuminate\Database\Eloquent\Relations\MorphOne;

trait HasMedia
{
    public function medias(): MorphOne
    {
        return $this->morphOne(Media::class, 'mediaable');
    }
}
