<?php

use App\SocialAccount;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SocialAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('social_accounts')->delete();

        $accounts = array(
            array('name' => 'Facebook', 'type' =>1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            array('name' => 'Instagram', 'type' =>2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            array('name' => 'Twitter', 'type' =>3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
        );

        SocialAccount::insert($accounts);
    }
}
