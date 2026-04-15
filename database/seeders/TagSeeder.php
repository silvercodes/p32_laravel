<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        Tag::create([
//            'name' => 'seed_3',
//            'slug' => 'seed-3',
//            'posts_count' => 5
//        ]);
//        Tag::create([
//            'name' => 'seed_4',
//            'slug' => 'seed-4',
//            'posts_count' => 1
//        ]);

//        $tag = Tag::factory()->create();
//        $tag->save();

//        Tag::factory(10)->create();

        Tag::factory(5)->popular()->create();



    }
}
