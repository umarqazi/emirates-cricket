<?php

namespace App\Http\Controllers;

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
        //
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

    public function uaeMens() {
        $team = $this->team_service->getOne(array('type' => Team::$Mens));
        return view('backend.team.uae-mens', compact('team'));
    }

    public function uaeWomens() {
        $team = $this->team_service->get(array('type' => Team::$Womens));
        return view('backend.team.uae-womens', compact('team'));
    }

    public function under19() {
        $team = $this->team_service->get(array('type' => Team::$U19));
        return view('backend.team.u-19', compact('team'));
    }
}
