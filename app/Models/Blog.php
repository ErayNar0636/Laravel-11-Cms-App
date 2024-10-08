<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Blog extends Model
{

    use HasFactory, Sluggable;
    protected  $fillable  = [
        "name",
        "image",
        "thumbail",
        "content",
        "metaTitle",
        "metaDescription",
        "metaKeywords",
        "slug"
    ];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
