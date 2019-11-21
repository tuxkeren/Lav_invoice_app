<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'atha',
            'email' => 'atha@atha.web.id',
            'password' => bcrypt('atha')
        ]);

        User::create([
            'name' => 'admin',
            'email' => 'admin@atha.web.id',
            'password' => bcrypt('admin')
        ]);

        User::create([
            'name' => 'user',
            'email' => 'user@atha.web.id',
            'password' => bcrypt('user')
        ]);

        User::create([
            'name' => 'koordinator',
            'email' => 'koordinator@atha.web.id',
            'password' => bcrypt('koordinator')
        ]);

    }
}
