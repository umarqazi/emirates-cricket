<?php

namespace App\Http\Controllers;

use App\Development;
use App\Http\Requests\DevelopmentRequest;
use App\Services\DevelopmentService;
use App\Services\ImageService;
use Illuminate\Http\Request;

class DevelopmentController extends Controller
{
    public $development_service;
    public $image_service;

    public function __construct()
    {
        $this->development_service = new DevelopmentService();
        $this->image_service = new ImageService();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $developments = $this->development_service->all();
        return view('backend.development.index', compact('developments'));
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
    public function show(Development $development)
    {
        return view('backend.development.show', compact('development'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Development $development)
    {
        return view('backend.development.edit', compact('development'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DevelopmentRequest $request, Development $development)
    {
        $developmentObj = $this->development_service->find($development->id);
        $params = $request->except(['_token', '_method', 'images']);

        $status = $this->development_service->update($development->id, $params);
        if (!empty($status)) {

            /* For Polymorphic Relation */
            $this->image_service->update($developmentObj, $request->except(['_token', '_method']));
            return redirect()->route('development.index')->with('success', $developmentObj->title.' has been Updated!');
        }
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

    public function frontendMainDevelopmentPage()
    {
        $emiratiheading = $this->development_service->findByType(Development::$EmiratiDevelopment)->heading;
        $pathwayheading = $this->development_service->findByType(Development::$DevelopmentPathway)->heading;
        return view('frontend.development', compact('emiratiheading', 'pathwayheading'));
    }

    public function frontendEmiratiDevelopmentPage()
    {
        $emirati = $this->development_service->findByType(Development::$EmiratiDevelopment);
        return view('frontend.emirati-development-program', compact('emirati'));
    }

    public function frontendDevelopmentPathwayPage()
    {
        $pathway = $this->development_service->findByType(Development::$DevelopmentPathway);
        return view('frontend.development-pathway', compact( 'pathway'));
    }
}
