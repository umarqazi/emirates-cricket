<?php

use App\Team;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->delete();

        $records = array(
          array('name' => 'UAE Men Team', 'type' => Team::$Mens, 'description' => 'The UAE Senior Men’s Team Is The Team That Represents The United Arab Emirates (UAE) In All Official And Unofficial Cricket Matches. UAE Men’s Became An Affiliate Member Of The International Cricket Council (ICC) In 1989 And An Associate Member In 1990. The UAE Also Gained ODI Status, Through To 2018.', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
          array('name' => 'UAE Women Team', 'type' => Team::$Womens, 'description' => 'The UAE Women’s Team Is The Team That Represents The United Arab Emirates (UAE) In International And Regional Cricket Matches. In July 2007, The UAE Women’s Team Made Their International Debut In The Asian Cricket Council’s (ACC) Women’s Tournament, Which Was Played In Malaysia.', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
          array('name' => 'UAE U-19 Team', 'type' => Team::$U19, 'description' => 'The UAE Under 19 (U19’S) Team Is The Team That Represents The United Arab Emirates (UAE) In All U19 Official And Unofficial Cricket Matches. UAE’s U19’S Recently Competed In The 2015 ACC Premier Tournament Where They Finished 4th.', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now())
        );

        Team::insert($records);
    }
}
