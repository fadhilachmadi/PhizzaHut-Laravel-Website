<?php

use Illuminate\Database\Seeder;
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
        //

        DB::table('users')->insert([
            'name' => 'admin',
            'role_id' => 1,
            'email' => 'admin@gmail.com',
            'password' => Hash::make('adminadminadmin'),
            'address' => 'admin',
            'phone' => '5676767',
            'gender' => 'female',
        ]);

        DB::table('users')->insert([
            'name' => 'budi',
            'role_id' => 2,
            'email' => 'budi@gmail.com',
            'password' => Hash::make('budibudibudi'),
            'address' => 'budi',
            'phone' => '1231231231',
            'gender' => 'male',
        ]);

        DB::table('users')->insert([
            'name' => 'zeha',
            'role_id' => 2,
            'email' => 'zeha@gmail.com',
            'password' => Hash::make('zehazehazeha'),
            'address' => 'zeha',
            'phone' => '1546457',
            'gender' => 'female',
        ]);
    }
}
