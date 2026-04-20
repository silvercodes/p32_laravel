<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\PostMetadata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
//    public function test()
//    {
//        // =============  ONE-TO-ONE ===========
////        $post = Post::find(5);
////
////        $metadata = $post->metadata;
////
////        echo $metadata->views_count;
////        echo $metadata->seo_title;
//
////        $metadata = PostMetadata::find(1);
////        $post = $metadata->post;
////        echo $post->title;
//
//
////        $post = Post::find(2);
////        $metadata = new PostMetadata([
////            'views_count' => 50,
////            'seo_title' => 'SEO title for 1',
////            'reading_time' => 15
////        ]);
////        $post->metadata()->save($metadata);
//
////        $post = Post::find(3);
////        $post->metadata()->create([
////            'views_count' => 50,
////            'seo_title' => 'SEO title for 1',
////            'reading_time' => 1
////        ]);
//
////        $post = Post::find(2);
////        $post->metadata->update([
////            'views_count' => 100
////        ]);
//
////        $post = Post::find(2);
////        $post->metadata()->updateOrCreate([
////            ['posst_id' => $post->id],
////            ['views_count' => $post->views_count+1]
////        ]);
//
//
//    // ========== ONE-TO-MANY ============
////        $user = User::find(5);
////
////        $posts = $user->posts;
////        foreach ($posts as $post) {
////            echo $post->title . "<br>";
////        }
////
////        $comments = $user->comments;
//
////        $post = Post::find(2);
////        $author = $post->author;
////        echo $author->name;
//
//
////        $user = User::find(5);
////        $publishedPosts = $user->posts()->where('is_published', true)->get();
////        dd($publishedPosts);
//
////        $user = User::find(5);
////        $count = $user->posts()->count();
////        echo $count;
//
//
////        $post = Post::find(2);
////        $post->comments()->create([
////            'user_id' => 5,
////            'content' => 'This is a test comment',
////            'is_approved' => true
////        ]);
//
//
//        // ========== MANY-TO-MANY =============
//
////        $post = Post::find(2);
////        $tags = $post->tags;
////
////        dump($tags);
//
//
////        $post = Post::find(2);
////
////        // $post->tags()->attach([1, 2, 4]);
////
////        // $post->tags()->sync([24, 25, 26]);
////
////        // $post->tags()->toggle([24, 25, 7]);
////
////        // $post->tags()->detach([7]);
////
//////        $post->tags()->where('tag_id', 1)->exists();
//////        $post->tags()->where('slug', 'cpp')->exists();
////
////        foreach ($post->tags as $tag) {
////            echo $tag->pivot->created_at;
////        }
//
//        // ========== HAS-MANY-THROUGH =========
////        $user = User::find(5);
////        $comments = $user->postComments;
////
////        $approvedComments = $user->postComments()
////            ->where('is_approved', true)
////            ->get();
//    }


//    public function test()
//    {
////        $posts = Post::all();
////        foreach ($posts as $post) {
////            echo $post->author->name . '<br>';
////        }
//
////        $posts = Post::with('author')->get();
////        foreach ($posts as $post) {
////            echo $post->author->name . '<br>';
////        }
//
////        $posts = Post::with(['author', 'comments'])->get();
//
//        // return response()->json($posts);
//
////        $posts = Post::with('author.comments')->get();
//
//        // return response()->json($posts);
//
//
////        $posts = Post::with(['comments' => function ($query) {
////            $query->orderBy('created_at', 'desc')->limit(5);
////        }])->get();
//
//
////        $posts = Post::with(['author' => function ($query) {
////            $query->where('is_premium', true);
////        }])->get();
//
//
////        $posts = Post::with([
////            'author:id,name,email',
////            'comments:id,post_id,content'
////        ])->get();
//
//
//
////        $posts = Post::all();
////
////        if(true) {
////            $posts->load('author', 'comments');
////        }
//
//
//
////        $posts = Post::all();
////
////        $posts->load('author');
////
////        foreach ($posts as $post) {
////            echo $post->author->name . '<br>';
////        }
//
//
//    }


    public function test()
    {
//        $users = DB::table('users')->get();
//
//        dump($users);
//
//        foreach ($users as $user) {
//            echo $user->name . "<br>";
//        }

//        $users = DB::table('users')->where('id', 2)->first();
//
//        $email = DB::table('users')->where('id', 2)->value('email');

//        $users = DB::table('users')
//            ->select('name as full_name', 'email')
//            ->get();
//
//        $users = DB::table('users')
//            ->select('name as full_name', 'email')
//            ->addSelect('created_at')
//            ->get();

//        $users = DB::table('users')
//            ->select('name as full_name', 'email');
//        if(true)
//            $users = $users->addSelect('created_at');
//        //
//        //
//        dd($users->toSql());
//        $users = $users->get();


//        $users = DB::table('users')->whereBetween('views_count', [100, 500])->get();


//        $users = DB::table('users')
//            ->where('id', 2)
//            ->where('role', 'admin');
//        dd($users->toSql());


//        $users = DB::table('users')
//            ->where('id', 2)
//            ->orWhere('role', 'admin');
//        dd($users->toSql());


//        $users = DB::table('users')
//            ->where('is_premium', true)
//            ->where(function($query) {
//                $query->where('role', 'admin')
//                    ->orWhere('role', 'editor');
//            });
//        dd($users->toSql());


//        $users = DB::table('users')
//            ->orderBy('name', 'asc')
//            ->get();


//        $users = DB::table('users')
//            ->select('role', DB::raw('count(*) as qty'))
//            ->groupBy('role')
//            ->having('qty', '>', 10);
//        dd($users->toSql());


//        $posts = DB::table('posts')
//            ->join('users', 'posts.author_id', '=', 'users.id')
//            ->join('comments', 'comments.post_id', '=', 'posts.id')
//            ->select(
//                'posts.*',
//                'users.name as author'
//            );
//        dd($posts->toSql());


//        $postsByAuthor = DB::table('posts')
//            ->select('author_id', DB::raw('count(*) as count'))
//            ->groupBy('author_id')
//            ->get();


//        $posts = DB::table('posts')
//            ->orderByRaw('(views_count * 2) DESC')
//            ->get();


//        DB::table('tags')
//            ->insert([
//                'name' => 'php',
//                'slug' => 'php',
//            ]);

//        DB::table('tags')
//            ->where('id', 17)
//            ->delete();
    }

}
