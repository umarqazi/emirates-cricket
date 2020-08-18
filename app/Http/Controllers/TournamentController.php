<?php

namespace App\Http\Controllers;

use App\Exports\TournamentExport;
use App\Http\Requests\TournamentRequest;
use App\Http\Requests\UpdateTournamentRequest;
use App\Notifications\PlayerRegistrationNotification;
use App\Notifications\TournamentRegistrationNotification;
use App\Notifications\TournamentRequestApprovalNotification;
use App\Notifications\TournamentRequestDeclinedNotification;
use App\Services\TournamentService;
use App\Tournament;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class TournamentController extends Controller
{
    public $tournament_service;

    public function __construct()
    {
        /* Check User Permission to Perform Action */
        $this->authorizeResource(Tournament::class, 'tournament');

        $this->tournament_service = new TournamentService();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tournaments = $this->tournament_service->all();
        return view('backend.tournament.index', compact('tournaments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createTournamentRegistration()
    {
        return view('frontend.tournament-registration');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeTournamentRegistration(TournamentRequest $request)
    {
        $params = $request->except(['_token', 'terms-and-condition']);

        if ($request->hasFile('tournament_file')) {
            $ext1 = $request->file('tournament_file')->getClientOriginalExtension();
            $filename1 = time() . uniqid() . '.' . $ext1;
            $file1 = $request->file('tournament_file');
            $params['tournament_file'] = $filename1;
        }

        if ($request->hasFile('participating_teams_file')) {
            $ext2 = $request->file('participating_teams_file')->getClientOriginalExtension();
            $filename2 = time() . uniqid() . '.' . $ext2;
            $file2 = $request->file('participating_teams_file');
            $params['participating_teams_file'] = $filename2;
        }

        $tournament = $this->tournament_service->store($params);

        if (!empty($tournament)) {
            if ($request->hasFile('tournament_file') || $request->hasFile('participating_teams_file')) {

                $path = 'uploads/tournament/' . $tournament->id . '/';
                if (!Storage::disk('public')->exists($path)) {
                    Storage::disk('public')->makeDirectory($path);
                }

                if ($request->hasFile('tournament_file')) {
                    Storage::disk('public')->putFileAs($path, $file1, $filename1);
                }
                if ($request->hasFile('participating_teams_file')) {
                    Storage::disk('public')->putFileAs($path, $file2, $filename2);
                }
            }

            /* After Registration being Submitted, Now Notify the user via Email. */
            $tournament->notify(new TournamentRegistrationNotification($tournament));
        }

        return redirect()->back()->with('success', 'Your Tournament Registration Form has been Submitted Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tournament $tournament)
    {
        return view('backend.tournament.show', compact('tournament'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tournament $tournament)
    {
        return view('backend.tournament.edit', compact('tournament'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTournamentRequest $request, Tournament $tournament)
    {
        $params = $request->except(['_token', '_method']);
        $_tournament = $this->tournament_service->find($tournament->id);

        if ($request->hasFile('tournament_file')) {
            $ext1 = $request->file('tournament_file')->getClientOriginalExtension();
            $filename1 = time() . uniqid() . '.' . $ext1;
            $file1 = $request->file('tournament_file');
            $params['tournament_file'] = $filename1;
        } else {
            $params['tournament_file'] = $_tournament->tournament_file;
        }

        if ($request->hasFile('participating_teams_file')) {
            $ext2 = $request->file('participating_teams_file')->getClientOriginalExtension();
            $filename2 = time() . uniqid() . '.' . $ext2;
            $file2 = $request->file('participating_teams_file');
            $params['participating_teams_file'] = $filename2;
        } else {
            $params['participating_teams_file'] = $_tournament->participating_teams_file;
        }

        $status = $this->tournament_service->update($params, $tournament->id);

        if (!empty($status)) {
            if ($request->hasFile('tournament_file') || $request->hasFile('participating_teams_file')) {

                $path = 'uploads/tournament/' . $tournament->id . '/';
                if (!Storage::disk('public')->exists($path)) {
                    Storage::disk('public')->makeDirectory($path);
                }

                if ($request->hasFile('tournament_file')) {
                    Storage::disk('public')->delete($path.$_tournament->tournament_file);
                    Storage::disk('public')->putFileAs($path, $file1, $filename1);
                }

                if ($request->hasFile('participating_teams_file')) {
                    Storage::disk('public')->delete($path.$_tournament->participating_teams_file);
                    Storage::disk('public')->putFileAs($path, $file2, $filename2);
                }
            }
        }

        return redirect()->route('tournament.index')->with('success', 'Tournament has been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tournament $tournament)
    {
        $status = $this->tournament_service->delete($tournament->id);
        return redirect()->route('tournament.index')->with('success', 'Tournament has been Deleted!');
    }

    public function openFile($id, $name)
    {
        $path = public_path('storage/uploads/tournament/'.$id.'/'.$name);
        return response()->file($path);
    }

    public function approveRequest($id) {
        $tournament = $this->tournament_service->find($id);
        $status = $this->tournament_service->approveRequest($id);
        if ($status) {

            /* After Registration Approval, Now Notify the user via Email. */
            $tournament->notify(new TournamentRequestApprovalNotification($tournament));
            return redirect()->route('tournament.index')->with('success', 'Tournament Request has been Approved!');
        }
    }

    public function declineRequest($id) {
        $tournament = $this->tournament_service->find($id);
        $status = $this->tournament_service->declineRequest($id);
        if ($status) {

            /* After Registration Declined, Now Notify the user via Email. */
            $tournament->notify(new TournamentRequestDeclinedNotification($tournament));
            return redirect()->route('tournament.index')->with('success', 'Tournament Request has been Declined!');
        }
    }

    public function export()
    {
        return Excel::download(new TournamentExport(), 'tournament-registrations.xlsx');
    }
}
