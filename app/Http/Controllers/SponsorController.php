<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSponsor;
use App\Http\Requests\UpdateSponsor;
use App\Services\SponsorService;
use App\Sponsor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class SponsorController extends Controller
{
    /**
     * @var SponsorService
     */
    public $sponsor_service;

    /**
     * SponsorController constructor.
     */
    public function __construct()
    {
        /* Check User Permission to Perform Action */
        $this->authorizeResource(Sponsor::class, 'sponsor');

        $this->sponsor_service = new SponsorService();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sponsors = $this->sponsor_service->all();
        return view('backend.sponsor.index', compact('sponsors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.sponsor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CreateSponsor $request): \Illuminate\Http\RedirectResponse
    {
        $extension = $request->file('image')->getClientOriginalExtension();
        $imageName = time().'.'.$extension;
        $params = $request->except('_token');
        $file = $request->file('image');
        $params['image'] = $imageName;

        $sponsor = $this->sponsor_service->store($params);
        if (!empty($sponsor)) {
            $path = 'uploads/sponsor/'.$sponsor->id.'/';
            if (!Storage::disk('public')->exists($path)) {
                Storage::disk('public')->makeDirectory($path);
            }
            Storage::disk('public')->putFileAs($path, $file, $imageName);
        }

        return redirect()->route('sponsor.index')->with('success', 'Sponsor has been Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sponsor = $this->sponsor_service->find($id);
        return view('backend.sponsor.show', compact('sponsor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sponsor = $this->sponsor_service->find($id);
        return view('backend.sponsor.edit', compact('sponsor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSponsor $request, $id)
    {
//        dd($request->all());
        $params = $request->except('_token', '_method', 'action');
        $oldImageName = $this->sponsor_service->find($id)->image;
        $file = '';
        $imageName = '';

        if ($request->hasFile('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $imageName = time() . '.' . $extension;
            $file = $request->file('image');
            $params['image'] = $imageName;
        } else{
            $params['image'] = $oldImageName;
        }

        $news = $this->sponsor_service->update($params, $id);
        if (!empty($news) && $request->hasFile('image')) {

            $path = 'uploads/sponsor/'.$id.'/';

            if (!Storage::disk('public')->exists($path)) {
                Storage::disk('public')->makeDirectory($path);
            }

            /* Delete Old Image */
            File::delete(public_path('storage/uploads/sponsor/'.$id.'/'.$oldImageName));

            /* Upload New Image */
            Storage::disk('public')->putFileAs($path, $file, $imageName);
        }
        return redirect()->route('sponsor.index')->with('success', 'Sponsor has been Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id): \Illuminate\Http\RedirectResponse
    {
        $this->sponsor_service->delete($id);
        return redirect()->back()->with('success', 'Sponsor has been Deleted Successfully!');
    }

    public function frontendSponsors() {
        $sponsors = $this->sponsor_service->paginatedRecords();
        return view('frontend.sponsor', compact('sponsors'));
    }
}
