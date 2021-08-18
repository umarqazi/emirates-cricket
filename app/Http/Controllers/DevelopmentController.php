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
        return view('backend.development.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DevelopmentRequest $request)
    {
        $this->development_service->store($request->except(['_token']));
        return redirect()->route('development.index')->with('success', 'List has been Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($development)
    {
        $development = $this->development_service->findOne(decodeData($development));
        return view('backend.development.show', compact('development'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($development)
    {
        $development = $this->development_service->findOne(decodeData($development));
        return view('backend.development.edit', compact('development'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Development $development)
    {

        $data = $request->except('_token', '_method', 'action');
        $this->development_service->update($data, $development['id']);

        return redirect()->route('development.index')->with('success', 'List has been Updated Successfully!');

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
        $emiratiheading = $this->development_service->findByType(Development::$EmiratiDevelopment);
        if ($emiratiheading){
            $emiratiheading = $emiratiheading->heading;
        }
        $pathwayheading = $this->development_service->findByType(Development::$DevelopmentPathway);
        if ($pathwayheading){
            $pathwayheading = $pathwayheading->heading;
        }
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
