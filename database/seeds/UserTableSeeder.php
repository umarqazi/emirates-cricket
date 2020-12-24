<?php

use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        User::create([
            'name' => 'ECB Admin',
            'email' => 'Info@emiratescricket.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('ecbadmin123!@#'),
        ]);
    }
}
