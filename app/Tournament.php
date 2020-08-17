<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Tournament extends Model
{
    use Notifiable;

    /* Tournament Status Types */
    public static $Approved = 1;
    public static $Declined = 0;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'organizer_name', 'organizer_address', 'organizer_telephone_no', 'organizer_mobile_no', 'email', 'is_registered_company', 'company_name', 'company_address', 'company_telephone_no', 'website', 'tournament_name', 'proposed_date', 'proposed_venue', 'final_venue', 'matches_place_one_emirate', 'surface', 'has_tournament_run_previously',
        'details', 'tournament_file', 'have_any_team_sold_before', 'have_any_team_banned_before', 'proposed_payment', 'any_team_using_banned_players', 'have_player_played_any_tournament', 'have_cricketers_played_any_tournament', 'high_profile_former_international_cricketers', 'participating_teams_file', 'tournament_fees', 'proposed_prize',
        'business_details', 'matches_in_one_emirate', 'status'
    ];
}
