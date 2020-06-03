<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('roles')->insert([
           'role' =>'Admin',

        ]);
        \Illuminate\Support\Facades\DB::table('roles')->insert([
            'role' =>'Auth-User',

        ]);
        \Illuminate\Support\Facades\DB::table('roles')->insert([
            'role' =>'Guest',

        ]);
    }
}
