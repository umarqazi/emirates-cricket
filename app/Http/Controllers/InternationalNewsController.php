<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateNewsRequest;
use App\InternationalNews;
use App\Services\InternationalNewsServices;
use Illuminate\Http\Request;
use App\Http\Requests\InternationalNewsRequest;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class InternationalNewsController extends Controller
{

    /**
     * @var InternationalNewsServices
     */
    public $Internation_news_service;

    /**
     * NewsController constructor.
     */
    public function __construct()
    {
        $this->Internation_news_service = new InternationalNewsServices();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $international_news = $this->Internation_news_service->all();
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

        $this->Internation_news_service->store($request->except(['_token']));
        return redirect()->route('international-news.index')->with('success', 'News has been Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(InternationalNews $international_news)
    {
        return view('backend.international-news.show', compact('international_news'));
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
    public function update(UpdateNewsRequest $request, InternationalNews $internationalNews)
    {
        $params = $request->except('_token', '_method', 'action');
        $oldImageName = $this->Internation_news_service->find($internationalNews->id)->image;
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

        $news = $this->Internation_news_service->update($params, $internationalNews->id);
        if (!empty($news) && $request->hasFile('image')) {

            $path = 'uploads/international-news/'.$internationalNews->id.'/';

            if (!Storage::disk('public')->exists($path)) {
                Storage::disk('public')->makeDirectory($path);
            }

            /* Delete Old Image */
            File::delete(public_path('storage/uploads/international-news/'.$internationalNews->id.'/'.$oldImageName));

            /* Upload New Image */
            Storage::disk('public')->putFileAs($path, $file, $imageName);
        }
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
        $status = $this->Internation_news_service->delete($internationalNews->id);
        if (!empty($status)) {
            return redirect()->back()->with('success', 'News has been Deleted Successfully!');
        }
    }
}
