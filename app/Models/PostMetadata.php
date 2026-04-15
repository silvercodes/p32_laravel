<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostMetadata extends Model
{
    /** @use HasFactory<\Database\Factories\PostMetadataFactory> */
    use HasFactory;

    protected $fillable = [
        'post_id',
        'views_count',
        'seo_title',
        'seo_description',
        'reading_time',
    ];

    protected function casts(): array
    {
        return [
            'views_count' => 'integer',
            'reading_time' => 'integer',
        ];
    }


}
