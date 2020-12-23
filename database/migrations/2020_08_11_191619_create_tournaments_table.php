<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTournamentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tournaments', function (Blueprint $table) {
            $table->id();
            $table->string('organizer_name');
            $table->string('organizer_address');
            $table->string('organizer_telephone_no');
            $table->string('organizer_mobile_no');
            $table->string('email')->unique();
            $table->string('company_name');
            $table->string('company_address');
            $table->string('company_telephone_no');
            $table->string('website');
            $table->string('tournament_name');
            $table->date('proposed_date');
            $table->string('proposed_venue');
            $table->string('final_venue');
            $table->string('surface');
            $table->text('details')->nullable();
            $table->string('tournament_file')->nullable();
            $table->string('participating_teams_file')->nullable();
            $table->string('tournament_fees');
            $table->string('proposed_prize');
            $table->text('business_details');
            $table->boolean('is_registered_company')->default(false);
            $table->boolean('matches_place_one_emirate')->default(false);
            $table->boolean('has_tournament_run_previously')->default(false);
            $table->boolean('have_any_team_sold_before')->default(false);
            $table->boolean('have_any_team_banned_before')->default(false);
            $table->boolean('proposed_payment')->default(false);
            $table->boolean('any_team_using_banned_players')->default(false);
            $table->boolean('have_player_played_any_tournament')->default(false);
            $table->boolean('have_cricketers_played_any_tournament')->default(false);
            $table->boolean('high_profile_former_international_cricketers')->default(false);
            $table->boolean('matches_in_one_emirate')->default(false);
            $table->boolean('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tournaments');
    }
}
