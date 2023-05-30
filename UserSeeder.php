<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'id'=>1,
            'first_name'=>'sair',
            'last_name' =>'cuello',
            'email'=>'saircuello1224@gmail.com',
            'password'=>'12345678',
            'registered_at'=>'2004-07-19 12:23:54',
            'last_login'=>'2023-05-26 15:22:44',
            'username'=>'saircuello'
        ]);
        DB::table('users')->insert([
            'id'=> 2,
            'first_name'=>'marianita',
            'last_name' =>'wesley',
            'email'=>'marwesley@gmail.com',
            'password'=>'5469872',
            'registered_at'=>'2005-04-09 02:13:44',
            'last_login'=>'2022-07-16 05:11:32',
            'username'=>'marwesley'
        ]);
    
//    
 
    } 
}
