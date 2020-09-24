<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AdminUserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = DB::table('permissions')->pluck('name');

        if (!empty($permissions)) {
            /* Create New Admin Role */
            $role = Role::create(['name' => 'Admin']);
            /* Assign Permissions to Admin Role */
            $role->syncPermissions($permissions);
            /* Assign Role to Selected User */
            $user = User::first();
            if (!empty($user)) {
                $user->assignRole($role->name);
            }
        }
    }
}
