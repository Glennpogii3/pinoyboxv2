<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;
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


        DB::table('users')->insert([
            'fname' => 'Super',
            'lname' => 'Admin',
            'email' => 'admin@dmin.com',
            'phone' => '905906435',
            'accType' => '1',
            'address1' => 'Prestige1',
            'address2' => 'Prestige2',
            'status' => '1',
            'active' => '1',
            'customer_Code' => 'PBD-000001',
            'cs_rank' => 'Ruby',
            'password' => Hash::make('admin@admin')
        ]);

        DB::table('users')->insert([
            'fname' => 'PBD' ,
            'lname' => 'Admin',
            'email' => 'PBDadmin@pbd.com',
            'phone' => '905906436',
            'accType' => '2',
            'address1' => 'Prestige3',
            'address2' => 'Prestige4',
            'status' => '1',
            'active' => '1',
            'customer_Code' => 'PBD-000002',
            'cs_rank' => 'Ruby',
            'password' => Hash::make('PBDVision2020')
        ]);

        DB::table('users')->insert([
            'fname' => 'Generic' ,
            'lname' => 'User',
            'email' => 'user@user.com',
            'phone' => '905906437',
            'accType' => '3',
            'address1' => 'PBDuser1',
            'address2' => 'PBDUser2',
            'status' => '1',
            'active' => '1',
            'customer_Code' => 'PBD-000003',
            'cs_rank' => 'Ruby',
            'password' => Hash::make('password')
        ]);


    }

}
