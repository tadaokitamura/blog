<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('posts')->insert([
            'title' => 'タイトル',
            'content' => 'コンテンツ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
    }

}
