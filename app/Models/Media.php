<?php

namespace App\Models;

use App\Trait\HasMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory, HasMedia;

    protected $table = 'medias';

    protected $fillable = [
        'name',
        'url',
        'mediaable_id',
        'mediaable_type',
        'type',
    ];

    public function mediaable()
    {
        return $this->morphTo();
    }
}
