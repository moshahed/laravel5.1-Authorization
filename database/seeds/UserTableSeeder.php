<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        DB::table('users')->insert([
            [
                'name'          => 'Shams Sadek',
                'email'         => 'shams@gmail.com',
                'password'      => bcrypt('123456')
            ],
            [
                'name'          => 'Moshahed',
                'email'         => 'moshahed777@gmail.com',
                'password'      => bcrypt('123456')
            ],
            [
                'name'          => 'Alam',
                'email'         => 'test@gmail.com',
                'password'      => bcrypt('123456')
            ],
            [
                'name'          => 'Test2',
                'email'         => 'test2@gmail.com',
                'password'      => bcrypt('123456')
            ]


        ]);
    }
}
