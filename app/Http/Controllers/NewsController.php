<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Services\NewsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * @var NewsService
     */
    public $news_service;

    /**
     * NewsController constructor.
     */
    public function __construct()
    {
        $this->news_service = new NewsService();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = $this->news_service->all();
        return view('backend.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(NewsRequest $request): \Illuminate\Http\RedirectResponse
    {
        $extension = $request->file('image')->getClientOriginalExtension();
        $imageName = time().'.'.$extension;
        $params = $request->except('_token');
        $file = $request->file('image');
        $params['image'] = $imageName;

        $news = $this->news_service->store($params);
        if (!empty($news)) {
            $path = 'uploads/news/'.$news->id.'/';
            if (!Storage::disk('public')->exists($path)) {
                Storage::disk('public')->makeDirectory($path);
            }
            Storage::disk('public')->putFileAs($path, $file, $imageName);
        }

        return redirect()->route('news.index')->with('success', 'News has been Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = $this->news_service->find($id);
        return view('backend.news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = $this->news_service->find($id);
        return view('backend.news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateNewsRequest $request, $id): \Illuminate\Http\RedirectResponse
    {
        $params = $request->except('_token', '_method', 'action');
        $oldImageName = $this->news_service->find($id)->image;
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

        $news = $this->news_service->update($params, $id);
        if (!empty($news) && $request->hasFile('image')) {

            $path = 'uploads/news/'.$id.'/';

            if (!Storage::disk('public')->exists($path)) {
                Storage::disk('public')->makeDirectory($path);
            }

            /* Delete Old Image */
            File::delete(public_path('storage/uploads/news/'.$id.'/'.$oldImageName));

            /* Upload New Image */
            Storage::disk('public')->putFileAs($path, $file, $imageName);
        }
        return redirect()->route('news.index')->with('success', 'News has been Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id): \Illuminate\Http\RedirectResponse
    {
        $news = $this->news_service->delete($id);
        return redirect()->back()->with('success', 'News has been Deleted Successfully!');
    }

    public function frontendNews() {
        $news = $this->news_service->paginatedRecords();
        return view('frontend.news', compact('news'));
    }
}
