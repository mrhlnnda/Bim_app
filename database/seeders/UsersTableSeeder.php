<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->insert([
            'role_id' => '1',
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('pass@admin'),
        ]);
        
        DB::table('dosen')->insert([
            'role_id' => '2',
            'name' => 'Dosen',
            'email' => 'dosen@gmail.com',
            'password' => bcrypt('pass@dosen'),
        ]);
        
        DB::table('mahasiswa')->insert([
            'role_id' => '3',
            'name' => 'Mahasiswa',
            'email' => 'mahasiswa@gmail.com',
            'password' => bcrypt('pass@mahasiswa'),
        ]);
    }
}
