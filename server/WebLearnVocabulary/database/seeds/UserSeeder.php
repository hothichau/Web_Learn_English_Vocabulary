<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
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
                'id' => 1,
                'username' => 'admin',
                'password' => '$2y$10$tF61EqNXzBtWHbqfnkgVQ.ee6sIGj058VGG8vjgZbLOxDrXzot.qe',
                'email' => 'admin1234@gmail.com',
                'role' => 'admin'
            ],
            [
                'id' => 2,
                'username' => 'user',
                'password' => '$2y$10$KASzDNCO1UE5B77S2dFvauDXsSyMK2EKZ5cFxkTrO6xqmaGMkVd4u',
                'email' => 'user1234@gmail.com',
                'role' => 'user'
            ]
        ]);
    }
}
