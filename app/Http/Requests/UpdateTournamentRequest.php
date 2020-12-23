<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTournamentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'organizer_name'          => 'required|max:255',
            'organizer_address'       => 'required|max:255',
            'organizer_telephone_no'  => 'required',
            'organizer_mobile_no'     => 'required',
            'email'                   => 'required|email',
            'is_registered_company'   => 'required',
            'company_name'            => 'required|max:255',
            'company_address'         => 'required|max:255',
            'company_telephone_no'    => 'required|max:255',
            'website'                 => 'required|max:255',
            'tournament_name'         => 'required|max:255',
            'proposed_date'           => 'required|date_format:d/m/Y',
            'proposed_venue'          => 'required|max:255',
            'final_venue'             => 'required|max:255',
            'matches_place_one_emirate' => 'required|max:255',
            'surface'                   => 'required|max:255',
            'has_tournament_run_previously' => 'required',
            'tournament_file'          => 'nullable',
            'have_any_team_sold_before'          => 'required',
            'have_any_team_banned_before'        => 'required',
            'proposed_payment'                   => 'required|max:255',
            'any_team_using_banned_players'      => 'required',
            'have_player_played_any_tournament'  => 'required',
            'have_cricketers_played_any_tournament'        => 'required',
            'high_profile_former_international_cricketers' => 'required',
            'participating_teams_file'           => 'nullable',
            'tournament_fees'                    => 'required|max:255',
            'proposed_prize'                     => 'required|max:255',
            'business_details'                   => 'required|max:255',
            'matches_in_one_emirate'             => 'required',
        ];
    }

    /**
     * @return array|string[]
     */
    public function messages()
    {
        return [
            'is_registered_company.required'   => 'This Field is Required!',
            'matches_place_one_emirate.required' => 'This Field is Required!',
            'has_tournament_run_previously.required' => 'This Field is Required!',
            'have_any_team_sold_before.required'          => 'This Field is Required!',
            'have_any_team_banned_before.required'        => 'This Field is Required!',
            'proposed_payment.required'                   => 'This Field is Required!',
            'any_team_using_banned_players.required'      => 'This Field is Required!',
            'have_player_played_any_tournament.required'  => 'This Field is Required!',
            'have_cricketers_played_any_tournament.required'        => 'This Field is Required!',
            'high_profile_former_international_cricketers.required' => 'This Field is Required!',
            'matches_in_one_emirate.required'             => 'This Field is Required!',
            'participating_teams_file.required'             => 'The participating teams field is required.!',
        ];
    }
}
