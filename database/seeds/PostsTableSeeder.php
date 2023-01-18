<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'user_id'=> '1',
                'posts'=> 'おはようございます',
                'created_at'=> '2021-1-1 20:00:00',
                'updated_at'=> '2021-1-1 20:00:00',
            ],
            [
                'user_id'=> '2',
                'posts'=> 'おやすみなさい',
                'created_at'=> '2021-1-1 21:00:00',
                'updated_at'=> '2021-1-1 21:00:00',
            ],
            [
                'user_id'=> '3',
                'posts'=> 'いただきます',
                'created_at'=> '2021-1-1 22:00:00',
                'updated_at'=> '2021-1-1 22:00:00',
            ],
        ]);
    }
}
