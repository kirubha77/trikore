<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'role_name' => 'admin',
        ]);

        DB::table('roles')->insert([
            'role_name' => 'employee',
        ]);

        DB::table('roles')->insert([
            'role_name' => 'supervisor',
        ]);
    }
}
