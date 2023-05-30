<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'id'=>4,
            'name'=>'sair',
            'content'=>'example',
            'slug'=>'(45)'
        ]);
        DB::table('categories')->insert([
            'id'=>5,
            'name'=>'Mar',
            'content'=>'example...',
            'slug'=>'(45)'
        ]);
    }
}
