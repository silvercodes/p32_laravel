<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\PostMetadata;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    {
        // =============  ONE-TO-ONE ===========
//        $post = Post::find(5);
//
//        $metadata = $post->metadata;
//
//        echo $metadata->views_count;
//        echo $metadata->seo_title;

//        $metadata = PostMetadata::find(1);
//        $post = $metadata->post;
//        echo $post->title;


//        $post = Post::find(2);
//        $metadata = new PostMetadata([
//            'views_count' => 50,
//            'seo_title' => 'SEO title for 1',
//            'reading_time' => 15
//        ]);
//        $post->metadata()->save($metadata);

//        $post = Post::find(3);
//        $post->metadata()->create([
//            'views_count' => 50,
//            'seo_title' => 'SEO title for 1',
//            'reading_time' => 1
//        ]);

//        $post = Post::find(2);
//        $post->metadata->update([
//            'views_count' => 100
//        ]);

//        $post = Post::find(2);
//        $post->metadata()->updateOrCreate([
//            ['posst_id' => $post->id],
//            ['views_count' => $post->views_count+1]
//        ]);


    // ========== ONE-TO-MANY ============
//        $user = User::find(5);
//
//        $posts = $user->posts;
//        foreach ($posts as $post) {
//            echo $post->title . "<br>";
//        }
//
//        $comments = $user->comments;

//        $post = Post::find(2);
//        $author = $post->author;
//        echo $author->name;


//        $user = User::find(5);
//        $publishedPosts = $user->posts()->where('is_published', true)->get();
//        dd($publishedPosts);

//        $user = User::find(5);
//        $count = $user->posts()->count();
//        echo $count;


//        $post = Post::find(2);
//        $post->comments()->create([
//            'user_id' => 5,
//            'content' => 'This is a test comment',
//            'is_approved' => true
//        ]);


        // ========== MANY-TO-MANY =============

//        $post = Post::find(2);
//        $tags = $post->tags;
//
//        dump($tags);


//        $post = Post::find(2);
//
//        // $post->tags()->attach([1, 2, 4]);
//
//        // $post->tags()->sync([24, 25, 26]);
//
//        // $post->tags()->toggle([24, 25, 7]);
//
//        // $post->tags()->detach([7]);
//
////        $post->tags()->where('tag_id', 1)->exists();
////        $post->tags()->where('slug', 'cpp')->exists();
//
//        foreach ($post->tags as $tag) {
//            echo $tag->pivot->created_at;
//        }






    }
}
