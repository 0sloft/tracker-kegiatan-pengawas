<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the seeder.
     *
     * @return void
     */
    public function run()
    {
        // Data contoh untuk tabel users
        $users = [
            [
                'name' => 'Admin',
                'username' => 'admin',
                'role' => 1,
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'User',
                'username' => 'user',
                'role' => 2,
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Wana',
                'username' => 'wana',
                'role' => 2,
                'password' => bcrypt('password'),
            ],
        ];

        // Masukkan data ke dalam tabel 'users'
        DB::table('users')->insert($users);
    }
}
