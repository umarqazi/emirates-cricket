<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeamRequest;
use App\Services\TeamPlayerService;
use App\Services\TeamService;
use App\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public $team_service;
    public $team_player_service;

    public function __construct()
    {
        /* Check User Permission to Perform Action */

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
        $teams = $this->team_service->all();
        return view('backend.team.index', compact('teams'));
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($team)
    {;
        $team = $this->team_service->findOne(decodeData($team));
        return view('backend.team.show', compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
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
    public function update(TeamRequest $request, Team $team)
    {
        $this->team_service->update($request->except(['_token', '_method']), $team->id);
        return redirect()->route('team.show', $team->id)->with('success', 'Team Description has been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($team)
    {
        $this->team_service->delete(decodeData($team));
        return redirect()->route('team.index')->with('success', 'Team has been Deleted!');
    }

    public function uaeMens() {
        $team = $this->team_service->getOne(array('type' => Team::$Mens));
        return view('frontend.uae-mens', compact('team'));
    }

    public function uaeWomens() {
        $team = $this->team_service->getOne(array('type' => Team::$Womens));
        return view('frontend.uae-womens', compact('team'));
    }

    public function under19() {
        $team = $this->team_service->getOne(array('type' => Team::$U19));
        return view('frontend.under-19', compact('team'));
    }
}
