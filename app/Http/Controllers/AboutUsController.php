<?php

namespace App\Http\Controllers;

use App\Contact;
use App\ContentPage;
use App\Http\Requests\UpdateAboutRequest;
use App\Repos\IAboutType;
use App\Repos\ICouncilType;
use App\Repos\IPageType;
use App\Services\AboutService;
use App\Services\ContactService;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    /**
     * @var AboutService
     */
    public $about_service;

    /**
     * ContactController constructor.
     */
    public function __construct()
    {
        /* Check User Permission to Perform Action */
//        $this->authorizeResource(ContentPage::class, 'about');

        $this->about_service = new AboutService();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = $this->about_service->all();
        return view('backend.about.index', compact('pages'));
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
        $about = $this->about_service->find($id);
        return view('backend.about.show', compact('about'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $about = $this->about_service->find($id);
        return view('backend.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAboutRequest $request, $id)
    {
        $data = $request->except(['_token', '_method']);
        $result = $this->about_service->update($data, $id);
        return redirect()->route('about.index')->with('success', 'About Page Details has been Updated!');
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

    public function mandate() {
        $where = array('page_type' => IPageType::aboutPage, 'about_type' => IAboutType::aboutMandate);
        $data = $this->about_service->findByType($where);
        return view('frontend.content-page', compact('data'));
    }

    public function academies() {
        $where = array('page_type' => IPageType::aboutPage, 'about_type' => IAboutType::aboutAcademics);
        $data = $this->about_service->findByType($where);
        return view('frontend.content-page', compact('data'));
    }

    public function education() {
        $where = array('page_type' => IPageType::aboutPage, 'about_type' => IAboutType::aboutEducation);
        $data = $this->about_service->findByType($where);
        return view('frontend.content-page', compact('data'));
    }

    public function councils($name) {
        $where = array('page_type' => IPageType::aboutPage, 'about_type' => IAboutType::aboutRegionalCouncils, 'council_type' => $name, );
        $data = $this->about_service->findByType($where);
        if ($data) {
            return view('frontend.content-page', compact('data'));
        }
    }
}
