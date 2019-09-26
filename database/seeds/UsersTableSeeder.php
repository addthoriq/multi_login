<?php

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
        $data       = [
            [
                'name'          =>  'Administrator',
                'email'         =>  'admin@admin.com',
                'password'      =>  bcrypt(123),
                'role'          =>  'ADMIN',
                'created_at'    =>  now(),
                'updated_at'    =>  now()
            ],
            [
                'name'          =>  'Muhammad Thoriq',
                'email'         =>  'thoriq@guru.com',
                'password'      =>  bcrypt(1234),
                'role'          =>  'GURU',
                'created_at'    =>  now(),
                'updated_at'    =>  now()
            ],
            [
                'name'          =>  'Safira Aulia',
                'email'         =>  'safira@siswa.com',
                'password'      =>  bcrypt(12345),
                'role'          =>  'SISWA',
                'created_at'    =>  now(),
                'updated_at'    =>  now()
            ],
        ];
        DB::table('users')->truncate();
        DB::table('users')->insert($data);
    }
}
