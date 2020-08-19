<?php

use App\Development;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DevelopmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('developments')->delete();

        $records = array(
            array('title' => 'Emirati Development Programme', 'type' => Development::$EmiratiDevelopment, 'heading' => '<h4>With just over a million Emirati’s living in UAE, the Emirati Development Programme forms an important part of Emirates Cricket’s strategic plan in growing the game.</h4>', 'description' => '<p>With just over a million Emirati’s living in UAE, the Emirati Development Programme forms an important part of Emirates Cricket’s strategic plan in growing the game.</p><p>The UAE National squad currently comprises of 3 Emirati Nationals and it’s the aim of the Emirati Development Programme to ensure that there will be a steady integration of National players available for selection, in all forms of the game, in the future.</p>
                <p>Cricket, traditionally amongst the Emirati population, has had a very low participation rate, with a majority never having experienced the game.</p><p>Through this affiliation the ECB now has the resources to take professional coaching into local schools and provide playing opportunities that have been limited before. A resource book of cricket in Arabic has been created and playing equipment provided to encourage and support this learning and development.</p><p>In addition, the Programme has been bolstered by the employment of a dedicated Arabic speaking Development Officer who will be able to take the game forward. For more information about the Emirati Development Programme contact Emirates Cricket’s National Development Manager, Andrew Russell via email: <a href="mailto:andrew.russell@emiratescricket.com">andrew.russell@emiratescricket.com</a></p>', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            array('title' => 'Development Pathway', 'type' => Development::$DevelopmentPathway, 'heading' => '<h4>The UAE Women’s team is the team that represents the United Arab Emirates (UAE) in international and regional cricket matches. In July 2007, the UAE Women’s team made their international debut in the Asian Cricket Council’s (ACC) Women’s Tournament, which was played in Malaysia.</h4>', 'description' => '<p>We want the game of cricket to be as accessible as possible to everyone living in the UAE.</p><p>Emirates Cricket has worked very hard in creating a comprehensive player pathway in which every player, no matter their skill set, gender or race can participate and grow in the game of cricket.</p>
                <p>We believe the development pathway provides a unique opportunity to progress from grass roots cricket to potentially becoming a UAE National player and provides a player with some clarity on where they fit in.</p><p>The development pathway is about letting everyone know where their opportunities lie in cricket and how we, Emirates Cricket, can help progress their involvement in the game.</p><p>The pathway has a strong focus on talent identification and includes the important new initiatives of the National Inter Council U16, U19 and Open tournaments. These tournaments allow the best players from the region to represent their emirate for possible national team selection.</p><p>In addition to this, plans are underway in creating a national academy to support the talent identification aspect of the programme. For more information about the Development Pathway contact Emirates Cricket’s National Development Manager, Andrew Russell via email: <a href="mailto:andrew.russell@emiratescricket.com">andrew.russell@emiratescricket.com</a></p>', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()),
            );

        Development::insert($records);
    }
}
