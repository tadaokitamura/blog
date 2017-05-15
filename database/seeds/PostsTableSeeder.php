<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    public function run()
    {
        /* add -->> */
        /*
        DB::table('posts')->truncate();
        factory(App\Post::class, 5)->create();
        */
        /* add <<-- */

        DB::table('posts')->insert([
            'title' => 'なかなかパーフェクトな手順が見えてこない',
            'content' => '新規で手順を確認しよう',
            'create_at' => new DateTime(),
            'update_at' => new DateTime()
        ]);
    }
}
