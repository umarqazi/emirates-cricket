<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $guard = 'web';
        DB::table('permissions')->delete();

        $permissions = array(
            array('name' => 'List User', 'module' => 'User', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Create User', 'module' => 'User', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Show User', 'module' => 'User', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Edit User', 'module' => 'User', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Delete User', 'module' => 'User', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'List Role', 'module' => 'Role', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Create Role', 'module' => 'Role', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Show Role', 'module' => 'Role', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Edit Role', 'module' => 'Role', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Delete Role', 'module' => 'Role', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'List Permission', 'module' => 'Permission', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Create Permission', 'module' => 'Permission', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Show Permission', 'module' => 'Permission', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Edit Permission', 'module' => 'Permission', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Delete Permission', 'module' => 'Permission', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'List News', 'module' => 'News', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Create News', 'module' => 'News', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Show News', 'module' => 'News', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Edit News', 'module' => 'News', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Delete News', 'module' => 'News', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'List Gallery', 'module' => 'Gallery', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Create Gallery', 'module' => 'Gallery', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Show Gallery', 'module' => 'Gallery', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Edit Gallery', 'module' => 'Gallery', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Delete Gallery', 'module' => 'Gallery', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'List Sponsor', 'module' => 'Sponsor', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Create Sponsor', 'module' => 'Sponsor', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Show Sponsor', 'module' => 'Sponsor', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Edit Sponsor', 'module' => 'Sponsor', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Delete Sponsor', 'module' => 'Sponsor', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'List Contact', 'module' => 'Contact', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Create Contact', 'module' => 'Contact', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Show Contact', 'module' => 'Contact', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Edit Contact', 'module' => 'Contact', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Delete Contact', 'module' => 'Contact', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'List Team Registration', 'module' => 'Team Registration', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Edit Team Registration', 'module' => 'Team Registration', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Delete Team Registration', 'module' => 'Team Registration', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'List Player Registration', 'module' => 'Player Registration', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Edit Player Registration', 'module' => 'Player Registration', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Delete Player Registration', 'module' => 'Player Registration', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
        );

        DB::table('permissions')->insert($permissions);
    }
}
