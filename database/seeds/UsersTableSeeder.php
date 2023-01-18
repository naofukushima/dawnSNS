<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'username' => 'hritarou',
                'mail' => 'tarou@mail.com',
                'password' => Hash::make('tarou11'),
                'bio' => '',
                'images' => 'dawn.png',
                'created_at' => '2021-3-1 18:35:48',
                'updated_at' => '2022-3-1 18:35:48',
            ],
            [
                'username' => 'hrijirou',
                'mail' => 'jirou@mail.com',
                'password' => Hash::make('jirou22'),
                'bio' => '',
                'images' => 'dawn.png',
                'created_at' => '2021-4-1 18:35:48',
                'updated_at' => '2022-4-1 18:35:48',
            ],
            [
                'username' => 'hrihanako',
                'mail' => 'hanako@mail.com',
                'password' => Hash::make('hanako33'),
                'bio' => '',
                'images' => 'dawn.png',
                'created_at' => '2021-5-1 18:35:48',
                'updated_at' => '2022-5-1 18:35:48',
            ],
            [
                'username' => 'hrijunko',
                'mail' => 'junko@mail.com',
                'password' => Hash::make('junko44'),
                'bio' => '',
                'images' => 'dawn.png',
                'created_at' => '2021-6-1 18:35:48',
                'updated_at' => '2022-6-1 18:35:48',
            ],
            [
                'username' => 'hrimakoto',
                'mail' => 'makoto@mail.com',
                'password' => Hash::make('makoto55'),
                'bio' => '',
                'images' => 'dawn.png',
                'created_at' => '2021-7-1 18:35:48',
                'updated_at' => '2022-7-1 18:35:48',
            ],
        ]);
    }
}
