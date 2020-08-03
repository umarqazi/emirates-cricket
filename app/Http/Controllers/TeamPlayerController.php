<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlayerRequest;
use App\Services\TeamPlayerService;
use App\Services\TeamService;
use Illuminate\Http\Request;

class TeamPlayerController extends Controller
{
    public $team_service;
    public $team_player_service;

    public function __construct()
    {
        $this->team_service = new TeamService();
        $this->team_player_service = new TeamPlayerService();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(PlayerRequest $request)
    {
        $player = $this->team_player_service->store($request->all());
        $count = $this->team_player_service->count();
        $data = view('backend.partials.add-team-player-row', ['player' => $player, 'count' => $count]);

        return response()->json([
            'type'      =>  'success',
            'msg'       =>  'Player has been Created Successfully!',
            'data'      =>  $data
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
