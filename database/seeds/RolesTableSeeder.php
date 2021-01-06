<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        Role::truncate();

        Role::Create(['name' => 'superadmin']);
        Role::Create(['name' => 'admin']);
        Role::Create(['name' => 'user']);
    }
}
