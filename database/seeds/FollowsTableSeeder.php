<?php

use Illuminate\Database\Seeder;

class FollowsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('follows')->insert([
            [
                'follow' => '10',
                'follower' => '30',
                'created_at' => '2021-1-1 2000:00:00',
            ]
        ]);
    }
}
