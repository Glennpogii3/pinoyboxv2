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


        User::truncate();

        DB::table('role_user')->truncate();

        $superadminRole = Role::where('name', 'superadmin')->first();
        $adminRole = Role::where('name', 'admin')->first();
        $userRole = Role::where('name', 'user')->first();

        $superadmin = User::create([
            'fname' => 'Super',
            'lname' => 'Admin',
            'email' => 'admin@dmin.com',
            'phone' => '905906435',
            'accType' => '1',
            'address1' => 'admin1',
            'address2' => 'admin2',
            'status' => '1',
            'active' => '1',
            'customer_Code' => 'PBD-000001',
            'cs_rank' => 'Ruby',
            'password' => Hash::make('admin@admin')
        ]);

        $admin = User::create([
            'fname' => 'PBD' ,
            'lname' => 'Admin',
            'email' => 'PBDadmin@pbd.com',
            'phone' => '905906436',
            'accType' => '2',
            'address1' => 'admin3',
            'address2' => 'admin4',
            'status' => '1',
            'active' => '1',
            'customer_Code' => 'PBD-000002',
            'cs_rank' => 'Ruby',
            'password' => Hash::make('PBDVision2020')
        ]);

        $user = User::create([
            'fname' => 'Generic' ,
            'lname' => 'User',
            'email' => 'user@user.com',
            'phone' => '905906437',
            'accType' => '3',
            'address1' => 'admin3',
            'address2' => 'admin4',
            'status' => '1',
            'active' => '1',
            'customer_Code' => 'PBD-000003',
            'cs_rank' => 'Ruby',
            'password' => Hash::make('password')
        ]);


        $superadmin->roles()->attach($superadminRole);
        $admin->roles()->attach($adminRole);
        $user->roles()->attach($userRole);
    }

}
