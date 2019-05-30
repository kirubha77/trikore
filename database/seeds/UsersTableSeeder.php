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
            'name' => 'admin',
            'email' => 'admin@trikore.in',
            'password' => bcrypt('123456'),
            'role_id' => '1'
        ]);

        DB::table('users')->insert([
            'name' => 'employee',
            'email' => 'employee@trikore.in',
            'password' => bcrypt('123456'),
            'role_id' => '2'
        ]);

        DB::table('users')->insert([
            'name' => 'supervisor',
            'email' => 'supervisor@trikore.in',
            'password' => bcrypt('123456'),
            'role_id' => '3'
        ]);
    }
}
