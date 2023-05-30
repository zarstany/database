<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { 
        DB::table('posts')->insert([
            'title'=>'Ameno',
            'content' =>'se hace mas ameno con un bacardi ',
            'slug'=>'Ameno-examplee',
            'summary'=>'se hace mas ameno',
            'publisher_at'=> '2022-12-14 05:06:12',
            'created_at'=>'2022-12-12 02:05:00',
            'updated_at' => '2023-02-11 15:10:01',
            'user_id'=> 1
        ]);
        
        DB::table('posts')->insert([
            'title'=>'el tiempo',
            'content' =>'el tiempo se hace efimero',
            'slug'=>'eltiempo/Etc...',
            'summary'=>'se acaba el tiempo',
            'publisher_at'=> '2023-05-14 08:09:02',
            'created_at'=>'2023-05-15 12:05:00',
            'updated_at' => '2023-02-11 15:15:01',
            'user_id'=> 2
        ]);
        //
    }
}
