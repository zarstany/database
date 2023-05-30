<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('post_categories')->insert([
            
            'post_id'=>1,
            'category_id'=>4
        ]);
        DB::table('post_categories')->insert([
            
            'post_id'=>2,
            'category_id'=>4
        ]);
        //
    }
}
