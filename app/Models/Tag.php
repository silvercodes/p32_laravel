<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

class Tag extends Model
{
    use HasFactory;

    protected $table = 'tags';
    protected $primaryKey = 'id';
//    public $incrementing = false;
//    protected $keyType = 'string';
//    public $timestamps = false;

    protected $fillable = [
        'name',
        'slug',
        'posts_count',
    ];

    public function casts(): array
    {
        return [
            'posts_count' => 'integer',
        ];
    }

    public function scopePopular(Builder $query) {
        return $query->where('posts_count', '>', 10);
    }

    public function scopeSearch(Builder $query, string $item): Builder
    {
        return $query->where('name', 'like', "%$item%");
    }

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('fresh', function (Builder $builder) {
            $builder->where('created_at', '>', '2026-01-01');
        });
    }
}
