<?php


namespace App\Services;


class CricClubApiService
{
    public function __construct()
    {

    }

    public function getClubIdAndLeagueList()
    {
        $url = config('cricclubapi.get_clubId_and_league_list_url');
        return $this->curl_request($url);
    }

    public function getClubInfo($club_id)
    {
        $url = config('cricclubapi.get_club_info');
        $url = str_replace("{clubId}", $club_id, $url);
        return $this->curl_request($url);
    }

    public function getLattestMatchResults($club_id, $league_id = null, $team_id=null)
    {
        $match_results = array();
        $url = config('cricclubapi.get_all_schedules_or_fixtures_updated');
        $url = str_replace("{clubId}", $club_id, $url);
        $url = !empty($league_id) ? $url.'&leagueId='.$league_id : $url;
        $url = !empty($league_id) ? $url.'&teamId='.$team_id : $url;

        /* Send out CURL Request to Cric-Club */
        $response = $this->curl_request($url);

        /* Get Data Key out of Response */
        if (!empty($response['pastFixtures'])) {
            $data = $response['pastFixtures'];

            /* Filter out only Completed Matches */
            /* And Put the Matches in Reverse Order to Get Lattest at Top */
            $reverse_data = array_reverse(array_filter($data, function ($each) {
                return $each['isMatchComplete'] === true;
            }, ARRAY_FILTER_USE_BOTH));

            /* Get only Recent 8 Matches */
            $recent_data = array_splice($reverse_data, 0, 8);

            foreach ($recent_data as $key=>$data) {

                $fixture_filter_results = array_filter($data, function ($k) {
                    return in_array($k, array('fixtureId', 'teamOne', 'teamTwo', 'date', 'time', 'matchType', 'location', 'leagueId', 'leagueName', 'matchID', 't1_logo_file_path', 't2_logo_file_path', 'seriesType'));
                }, ARRAY_FILTER_USE_KEY);

                /* Get Score Card for each Match */
                $score = $this->getMatchScorecard($club_id, $data['matchID']);

                /* Filter out Keys that are needed */
                $score_filtered_results = array_filter($score['data']['matchInfo'], function ($k) {
                    return in_array($k, array('teamOneName', 'teamOneCode', 'teamOneCaptain', 'teamTwoName', 'teamTwoCode', 'teamTwoCaptain', 'tossWon', 'battingFirst', 'overs', 'winner', 't1total', 't2total', 't1wickets', 't2wickets', 't1balls', 't2balls', 'manOfTheMatch', 'result', 'seriesName', 'liveURL'));
                }, ARRAY_FILTER_USE_KEY);

                /* Merge all data Together */
                $match_results[$key] = array_merge($fixture_filter_results, $score_filtered_results);
            }

            return $match_results;
        }

        $error_message = $response['errorMessage'];
        echo "<h2>$error_message</h2>";
        die();
    }

    public function getMatchScorecard($club_id, $match_id)
    {
        $url = config('cricclubapi.get_match_scorecard');
        $url = str_replace("{clubId}", $club_id, $url);
        $url = str_replace("{matchId}", $match_id, $url);

        return $this->curl_request($url);
    }

    public function getMatchScoreOverlay($club_id, $match_id, $fixture_id)
    {
        $url = config('cricclubapi.get_match_score_overlay');
        $url = str_replace("{clubId}", $club_id, $url);
        $url = str_replace("{matchId}", $match_id, $url);
        $url = str_replace("{fixtureId}", $match_id, $url);

        return $this->curl_request($url);
    }

    public function curl_request($url) {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "consumerKey:".env('PROD_CRIC_CLUB_CONSUMER_KEY'),
            "apiKey:".env('PROD_CRIC_CLUB_API_KEY')
        ));

        $response = curl_exec($ch);
        curl_close($ch);

        return json_decode($response, true);
    }
}
