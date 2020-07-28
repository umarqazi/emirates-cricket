<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Http\Requests\CreateGallery;
use App\Image;
use App\Services\GalleryService;
use App\Services\ImageService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * @var GalleryService
     * @var ImageService
     */
    public $gallery_service;
    public $image_service;

    /**
     * GalleryController constructor.
     */
    public function __construct()
    {
        $this->gallery_service = new GalleryService();
        $this->image_service = new ImageService();
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $galleries = $this->gallery_service->all();
        return view('backend.gallery.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create(): \Illuminate\View\View
    {
        return view('backend.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CreateGallery $request): \Illuminate\Http\RedirectResponse
    {
        $extension = $request->file('image')->getClientOriginalExtension();
        $imageName = time().'.'.$extension;
        $params = $request->except('_token');
        $file = $request->file('image');
        $params['image'] = $imageName;

        $gallery = $this->gallery_service->store($params);
        if (!empty($gallery)) {
            /* For Polymorphic Relation */
            $this->image_service->store($gallery, $params);

            $path = 'uploads/gallery/'.$gallery->id.'/';
            if (!Storage::disk('public')->exists($path)) {
                Storage::disk('public')->makeDirectory($path);
            }
            Storage::disk('public')->putFileAs($path, $file, $imageName);
        }

        return redirect()->route('gallery.index')->with('success', 'Gallery has been Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gallery = $this->gallery_service->find($id);
        return view('backend.gallery.show', compact('gallery'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallery = $this->gallery_service->find($id);
        return view('backend.gallery.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateGallery $request, $id)
    {
        dd($id);

        $params = $request->except('_token', '_method', 'action');
        $oldImageName = $this->gallery_service->find($id)->image;
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

        $news = $this->gallery_service->update($params, $id);

        /* For Polymorphic Relation */
        $this->image_service->store($gallery, $params);

        if (!empty($news) && $request->hasFile('image')) {

            $path = 'uploads/gallery/'.$id.'/';

            if (!Storage::disk('public')->exists($path)) {
                Storage::disk('public')->makeDirectory($path);
            }

            /* Delete Old Image */
            File::delete(public_path('storage/uploads/gallery/'.$id.'/'.$oldImageName));

            /* Upload New Image */
            Storage::disk('public')->putFileAs($path, $file, $imageName);
        }
        return redirect()->route('news.index')->with('success', 'News has been Updated Successfully!');


        $extension = $request->file('image')->getClientOriginalExtension();
        $imageName = time().'.'.$extension;
        $params = $request->except('_token');
        $file = $request->file('image');
        $params['image'] = $imageName;

        $gallery = $this->gallery_service->store($params);
        if (!empty($gallery)) {
            /* For Polymorphic Relation */
            $this->image_service->store($gallery, $params);

            $path = 'uploads/gallery/'.$gallery->id.'/';
            if (!Storage::disk('public')->exists($path)) {
                Storage::disk('public')->makeDirectory($path);
            }
            Storage::disk('public')->putFileAs($path, $file, $imageName);
        }

        return redirect()->route('gallery.index')->with('success', 'Gallery has been Created Successfully!');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id): ?\Illuminate\Http\RedirectResponse
    {
        $response = $this->gallery_service->delete($id);
        if ($response) {
            return redirect()->back()->with('success', 'Gallery has been Deleted!');
        }
    }

    public function uploadGalleryImages(Request $request)
    {
        $path = public_path('storage/uploads/temp/gallery-images');

        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }

        $file = $request->file('file');

        $name = time().uniqid().'.'.trim($file->getClientOriginalExtension());

        $file->move($path, $name);

        return response()->json([
            'name'          => $name,
            'original_name' => $file->getClientOriginalName(),
        ]);
    }

    public function frontendGalleries() {
        $galleries = $this->gallery_service->all();
        return view('frontend.galleries', compact('galleries'));
    }
}
