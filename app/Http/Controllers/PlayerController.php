<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlayerRegistration;
use App\Notifications\PlayerRegistrationNotification;
use App\Player;
use App\Services\CountryService;
use App\Services\PlayerService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PlayerController extends Controller
{
    /**
     * @var PlayerService
     * @var CountryService
     */
    public $player_service;
    public $country_service;

    /**
     * PlayerController constructor.
     */
    public function __construct()
    {
        /* Check User Permission to Perform Action */
        $this->authorizeResource(Player::class, 'player');

        $this->player_service = new PlayerService;
        $this->country_service = new CountryService();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = $this->player_service->all();
        return view('backend.player.list', compact('players'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = $this->country_service->all();
        return view('frontend.player-registration', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PlayerRegistration $request): \Illuminate\Http\RedirectResponse
    {
        $player = $this->player_service->store($request->except('_token'));
        if ($player) {
            $player->notify(new PlayerRegistrationNotification($player));
            return redirect()->back()->with('success', 'Your Request for Registration has been submitted Successfully!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $player = $this->player_service->find($id);
        $countries = $this->country_service->all();

        return view('backend.player.show', compact('player', 'countries'));
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
        $response = $this->player_service->delete($id);
        if ($response) {
            return redirect()->back()->with('success', 'Player Record has been Deleted!');
        }
    }

    public function uploadHeadShotPhoto(Request $request) {
        $data = $request->image;

        list($type, $data) = explode(';', $data);
        list(, $data)      = explode(',', $data);

        $data = base64_decode($data);
        $imageName = time().'.png';
        $path = 'uploads/temp/';

        if (!Storage::disk('public')->exists($path)) {
            Storage::disk('public')->makeDirectory($path);
        }

        Storage::disk('public')->put($path.$imageName, $data);
        echo $imageName;
    }

    public function approveRequest($id) {
        $status = $this->player_service->approveRequest($id);
        if ($status) {
            return redirect()->route('player.index')->with('success', 'Player Request has been Approved!');
        }
    }

    public function declineRequest($id) {
        $status = $this->player_service->declineRequest($id);
        if ($status) {
            return redirect()->route('player.index')->with('success', 'Player Request has been Declined!');
        }
    }
}
