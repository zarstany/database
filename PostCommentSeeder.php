<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        DB::table('post_comments')->insert([
            'content'=>'muy buena reflexion',
            'publisher_at'=>'2023-01-25 22:48:05',
            'updated_at'=>'2023-01-26 23:50:00',
            'user_id'=>1,
            'post_id'=>1
        ]);
        DB::table('post_comments')->insert([
            'content'=>'el tiempo se nos va de las manos',
            'publisher_at'=>'2023-01-25 22:48:05',
            'updated_at'=>'2023-01-26 23:50:00',
            'user_id'=>2,
            'post_id'=>2
        ]);
    }
}
