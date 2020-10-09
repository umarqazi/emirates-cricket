<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateInternationalRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\InternationalNews;
use App\Services\InternationalNewsService;
use Illuminate\Http\Request;
use App\Http\Requests\InternationalNewsRequest;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class InternationalNewsController extends Controller
{

    /**
     * @var InternationalNewsService
     */
    public $international_news_service;

    /**
     * NewsController constructor.
     */
    public function __construct()
    {
        /* Check User Permission to Perform Action */
//        $this->authorizeResource(InternationalNews::class, 'international-news');
        $this->international_news_service = new InternationalNewsService();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $international_news = $this->international_news_service->all();
        return view('backend.international-news.index', compact('international_news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.international-news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InternationalNewsRequest $request)
    {
        $this->international_news_service->store($request->except(['_token']));
        return redirect()->route('international-news.index')->with('success', 'News has been Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(InternationalNews $internationalNews)
    {
        return view('backend.international-news.show', compact('internationalNews'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(InternationalNews $internationalNews)
    {
        return view('backend.international-news.edit', compact('internationalNews'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInternationalRequest $request, InternationalNews $internationalNews)
    {
        $data = $request->except('_token', '_method', 'action');
        $this->international_news_service->update($data, $internationalNews['id']);

        return redirect()->route('international-news.index')->with('success', 'News has been Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(InternationalNews $internationalNews)
    {
        $status = $this->international_news_service->delete($internationalNews->id);
        if (!empty($status)) {
            return redirect()->back()->with('success', 'News has been Deleted Successfully!');
        }
    }
}
