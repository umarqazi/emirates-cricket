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
          array('name' => "UAE Men's", 'type' => Team::$Mens, 'description' => '<p>The UAE Men’s team represents the United Arab Emirates (UAE) in all ICC and ACC official and unofficial cricket matches.</p><br><h5>Accolades include:</h5><p>1994 ICC Trophy / ICC Cricket World Cup Qualifier (2016) winners</p><p>1996 and 2016 ICC Cricket World Cup participation</p><p>2016 ICC T20 World Cup qualifier participation</p><p>4-time (consecutive) winners of the Asian Cricket Council’s ACC Trophy - 2000 and 2006, and runners-up in the 1996, 1998 and 2008 editions</p><br>', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
          array('name' => "UAE Women's", 'type' => Team::$Womens, 'description' => '<p>The UAE Women’s team represents the United Arab Emirates (UAE) in all ICC and ACC official and unofficial cricket matches. In July 2007, the UAE Women’s team made their international debut in the Asian Cricket Council’s (ACC) Women’s Tournament, which was played in Malaysia.</p><br><p>2014 GCC Women’s T20 Championship winners</p><p>2015 GCC Women’s T20 Championship winners</p><p>2018 ICC Women’s World T20 qualifier participation</p><p>2021 ICC Women’s World T20 Asian Qualifier winners</p><p>2022 ICC Women’s World T20 qualifier participation</p><br>', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
          array('name' => "UAE U-19 Men's", 'type' => Team::$U19, 'description' => '<p>The UAE U19’s team represents the United Arab Emirates (UAE) in all ICC and ACC official and unofficial cricket matches.</p><br><h5>Accolades include:</h5><p>2014 ICC U19 World Cup host participation</p><p>2019 ICC U19 Cricket World Cup Qualifier - Asia Division 1 - winners</p><p>2020 ICC U19 Cricket World Cup participation</p><p>2022 ICC U19 Cricket World Cup participation</p><br>', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now())
        );

        Team::insert($records);
    }
}
