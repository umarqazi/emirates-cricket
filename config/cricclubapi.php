<?php

return [
    /**
     *
     * Below given are the URLS of CRIC-CLUB API's.
     *
     */

    'get_clubId_and_league_list_url' => env('PROD_CRIC_CLUB_URL').'/league/cleague',
    'get_club_info' => env('PROD_CRIC_CLUB_URL').'/clubs/info?clubId={clubId}',
    'get_all_schedules_or_fixtures' => env('PROD_CRIC_CLUB_URL').'/schedule/1?clubId={clubId}',
    'get_all_past_fixtures' => env('PROD_CRIC_CLUB_URL').'/match/getMatches?clubId={clubId}',
    'get_all_upcoming_fixtures' => env('PROD_CRIC_CLUB_URL').'/match/getSchedule?clubId={clubId}',
    'get_match_scorecard' => env('PROD_CRIC_CLUB_URL').'/scoreCard/getScoreCard?matchId={matchId}&clubId={clubId}',
    'get_match_score_overlay' => env('PROD_CRIC_CLUB_URL').'/liveScoreOverlay/liveScoreOverlayData?clubId={clubId}&matchId={matchId}&fixtureId={fixtureId}',

];
