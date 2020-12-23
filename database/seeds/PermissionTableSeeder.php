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
            array('name' => 'List Tournament Registration', 'module' => 'Tournament Registration', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Show Tournament Registration', 'module' => 'Tournament Registration', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Edit Tournament Registration', 'module' => 'Tournament Registration', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Delete Tournament Registration', 'module' => 'Tournament Registration', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'List Player Registration', 'module' => 'Player Registration', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Show Player Registration', 'module' => 'Player Registration', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Edit Player Registration', 'module' => 'Player Registration', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Delete Player Registration', 'module' => 'Player Registration', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'List Update', 'module' => 'Update', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Create Update', 'module' => 'Update', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Show Update', 'module' => 'Update', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Edit Update', 'module' => 'Update', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Delete Update', 'module' => 'Update', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'List Team', 'module' => 'Team', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Create Team', 'module' => 'Team', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Show Team', 'module' => 'Team', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Edit Team', 'module' => 'Team', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Delete Team', 'module' => 'Team', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'List Team Player', 'module' => 'Team Player', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Create Team Player', 'module' => 'Team Player', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Show Team Player', 'module' => 'Team Player', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Edit Team Player', 'module' => 'Team Player', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Delete Team Player', 'module' => 'Team Player', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'List About', 'module' => 'About', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Show About', 'module' => 'About', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Edit About', 'module' => 'About', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'List Development', 'module' => 'Development', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Show Development', 'module' => 'Development', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Edit Development', 'module' => 'Development', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'List Employee', 'module' => 'Employee', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Create Employee', 'module' => 'Employee', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Edit Employee', 'module' => 'Employee', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Delete Employee', 'module' => 'Employee', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'List International News', 'module' => 'International News', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Create International News', 'module' => 'International News', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Show International News', 'module' => 'International News', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Edit International News', 'module' => 'International News', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Delete International News', 'module' => 'International News', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'List About Pages', 'module' => 'About Pages', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Show About Pages', 'module' => 'About Pages', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Edit About Pages', 'module' => 'About Pages', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Delete About Pages', 'module' => 'About Pages', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'List Setting', 'module' => 'Setting', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Create Setting', 'module' => 'Setting', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Show Setting', 'module' => 'Setting', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Edit Setting', 'module' => 'Setting', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('name' => 'Delete Setting', 'module' => 'Setting', 'guard_name' => $guard, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            );

        DB::table('permissions')->insert($permissions);
    }
}
