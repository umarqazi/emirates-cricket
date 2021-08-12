<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\News;
use App\Services\NewsService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;

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
        /* Check User Permission to Perform Action */

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
        $params['date'] = Carbon::now();
        $params['image_alt'] = $params['headline'];
        $params['slug'] = Str::slug($params['headline']);

        $news = $this->news_service->store($params);
        if (!empty($news)) {
            $path = 'uploads/news/';
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
    public function show($news)
    {
        $news = $this->news_service->findOne(decodeData($news));
        return view('backend.news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($news)
    {
        $news = $this->news_service->findOne(decodeData($news));
        return view('backend.news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateNewsRequest $request, News $news): \Illuminate\Http\RedirectResponse
    {
        $params = $request->except('_token', '_method', 'action');
        $oldImageName = $this->news_service->find($news->id)->image;
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

        if (!empty($news) && $request->hasFile('image')) {
            $path = 'uploads/news/';

            if (!Storage::disk('public')->exists($path)) {
                Storage::disk('public')->makeDirectory($path);
            }

            /* Delete Old Image */
            File::delete(public_path('storage/uploads/news/'.$news->id.'/'.$oldImageName));

            /* Upload New Image */
            Storage::disk('public')->putFileAs($path, $file, $imageName);
        }

        $params['date'] = Carbon::now();
        $params['image_alt'] = $params['headline'];
        $params['slug'] = Str::slug($params['headline']);

        $news = $this->news_service->update($params, $news->id);
        return redirect()->route('news.index')->with('success', 'News has been Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($news): \Illuminate\Http\RedirectResponse
    {
        $status = $this->news_service->delete(decodeData($news));
        if (!empty($status)) {
            return redirect()->back()->with('success', 'News has been Deleted Successfully!');
        }
    }

    public function frontendNews(Request $request)
    {
        if($request->ajax()) {
            $year = $request->year ? $request->year : '';
            $yearly_news = $this->news_service->yearlyNews($request->all());
            return View::make("frontend.yearly-news", compact('yearly_news','year'))
                ->render();
        } else {
            $years = $this->news_service->getNewsYear();
            $current_year = count($years) - 1;
            if ($request->year) {
                $news = $this->news_service->yearlyNews($request->all());
            } else {
                $news = $this->news_service->yearlyNews($years[$current_year]->year);
            }
            return view('frontend.news', compact('news','years'));
        }
    }
}
