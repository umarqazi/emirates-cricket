<?php

use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
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
        User::create([
            'name' => 'ECB Admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('12345678'),
        ]);
    }
}
