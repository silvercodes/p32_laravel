<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
//    public function test()
//    {
//        // ===== CREATE
////        $tag = new Tag();
////        $tag->name = 'test_1';
////        $tag->slug = 'test-1';
////        $tag->save();
//
////        $tag = Tag::create([
////            'name' => 'test_2',
////            'slug' => 'test-2'
////        ]);
//
////        $tag = Tag::firstOrCreate(
////            ['id' => 3],
////            ['name' => 'test_3', 'slug' => 'test-3']
////        );
////        return $tag;
//
//        // ===== READ
//
////        $tags = Tag::all();
////        dd($tags);
//
////        $tag = Tag::find(2);
//
////        $tag = Tag::where('slug', 'test-2')->first();
//
////        $tags = Tag::where('created_at', '>', '2026-01-01')->get();
//
////        $tags = Tag::oderBy('name', 'desc')->get();
//
////        $tags = Tag::where('created_at', '>', '2026-01-01')
////            ->orderBy('name', 'desc')
////            ->get();
////        dd($tags);
//
////        $tag = Tag::findOrFail(1);
//
////        $tag = Tag::where('slug', 'test-101')->firstOrFail();
//
//        // ====== UPDATE
//
////        $tag = Tag::find(1);
////        $tag->name = 'Laravel';
////        $tag->save();
//
////        $tag = Tag::find(1);
////        $tag->update([
////            'name' => 'php 8',
////            'slug' => 'php-8'
////        ]);
//
////        Tag::where('slug', 'test-3')
////            ->update(['posts_count' => 1]);
//
//        // ==== DELETE
////        $tag = Tag::find(3);
////        $tag->delete();
////
////        Tag::where('slug', 'test-3')
////            ->delete();
//
//    }


//    public function test()
//    {
//        $tags = Tag::where('posts_count', '>', 10)->get();
//        $tags = Tag::where('posts_count', '>', 10)->orderBy('name')->get();
//
//        $tags = Tag::popular()->get();
//        $tags = Tag::popular()->orderBy('name')->get();
//
//        $tags = Tag::search('test')->get();
//
//        $tags = Tag::withoutGlobalScope('fresh')->get();
//    }

}
