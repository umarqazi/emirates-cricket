<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UserTableSeeder::class);
         $this->call(CountriesTableSeeder::class);
         $this->call(TeamTableSeeder::class);
         $this->call(PermissionTableSeeder::class);
         $this->call(AdminUserRoleSeeder::class);
         $this->call(DevelopmentTableSeeder::class);
         $this->call(SettingTableSeeder::class);
         $this->call(ContentPageSeeder::class);
    }
}
