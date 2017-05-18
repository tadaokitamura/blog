<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('posts')->insert([
            'title' => 'タイトル',
            'content' => 'コンテンツ',
            'create_at' => new DateTime(),
            'update_at' => new DateTime()
        ]);
    }
}
