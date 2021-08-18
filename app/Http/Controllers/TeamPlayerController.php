<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlayerRequest;
use App\Services\TeamPlayerService;
use App\Services\TeamService;
use App\TeamPlayer;
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
        $teams = $this->team_service->all();
        return view('backend.team-player.create', compact('teams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(PlayerRequest $request)
    {
        $params = $request->except(['_token', 'team']);
        $team_id =  $request->team;
        $params['team_id'] = $team_id;
        if($request->image == null){
            $params['image'] = null;
        }else{
            $params['image'] = $request->image->getClientOriginalName();
        }
        $this->team_player_service->storeToGallery($request);
        $this->team_player_service->store($params);
        return redirect()->route('team.show', encodeData($team_id))->with('success', 'Player Has been Added Successfully!');
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
    public function edit($teamPlayer)
    {
        $player = $this->team_player_service->findOne(decodeData($teamPlayer));
        $teams = $this->team_service->all();
        return view('backend.team-player.edit', compact('player', 'teams'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PlayerRequest $request, $teamPlayer)
    {
        $teamPlayer = $this->team_player_service->findOne(decodeData($teamPlayer));
        if (!is_null($request->image)){
            $this->team_player_service->removeFileFromDirectory($teamPlayer['image']);
        }
        $params = $request->except(['_token', '_method' , 'team']);
        $team_id = $request->team;
        $params['team_id'] = $team_id;
        if($request->image == null){
            $params['image'] = $teamPlayer['image'];
        }else{
            $params['image'] = $request->image->getClientOriginalName();
        }
        $this->team_player_service->storeToGallery($request);
        $this->team_player_service->update($params, $teamPlayer->id);
        return redirect()->route('team.show', encodeData($team_id))->with('success', 'Player Has been Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($teamPlayer)
    {
        $player = $this->team_player_service->findOne(decodeData($teamPlayer));
        $this->team_player_service->removeFileFromDirectory($player['image']);
        $this->team_player_service->delete(decodeData($teamPlayer));
        return redirect()->back()->with('success', 'Player Has been Deleted Successfully!');
    }
}
