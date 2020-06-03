<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'Pradip',
            'email' => 'prp_slayer@hotmail.com',
            'password' => Hash::make('password'),
            'role_id' => 1,
        ]);
    }
}
