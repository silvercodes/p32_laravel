<?php

namespace App\Observers;

use App\Models\Post;
use Illuminate\Support\Str;

class PostObserver
{
    public function creating(Post $post): void
    {
        if (empty($post->slug))
            $post->slug = Str::slug(Str::limit($post->title, 10));
    }

    public function created(Post $post): void
    {
        if ($post->author)
            $post->author->increment('posts_count');
    }

    public function deleted(Post $post): void
    {
        if ($post->author)
            $post->author->decrement('posts_count');
    }
}
