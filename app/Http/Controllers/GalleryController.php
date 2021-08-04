<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Http\Requests\CreateGallery;
use App\Http\Requests\UpdateGallery;
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
        /* Check User Permission to Perform Action */

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
    public function show(Gallery $gallery)
    {
        return view('backend.gallery.show', compact('gallery'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        return view('backend.gallery.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGallery $request, Gallery $gallery)
    {
        $params = $request->except('_token', '_method', 'images');
        $galleryObj = $this->gallery_service->find($gallery->id);
        $file = '';
        $imageName = '';

        if ($request->hasFile('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $imageName = time() . '.' . $extension;
            $file = $request->file('image');
            $params['image'] = $imageName;
        } else{
            $params['image'] = $galleryObj->image;
        }

        $status = $this->gallery_service->update($params, $gallery->id);

        /* For Polymorphic Relation */
        $this->image_service->update($galleryObj, $request->except('_token', '_method'));

        if (!empty($status) && $request->hasFile('image')) {

            $path = 'uploads/gallery/'.$gallery->id.'/';

            if (!Storage::disk('public')->exists($path)) {
                Storage::disk('public')->makeDirectory($path);
            }

            /* Delete Old Image */
            File::delete(public_path('storage/uploads/gallery/'.$gallery->id.'/'.$galleryObj->image));

            /* Upload New Image */
            Storage::disk('public')->putFileAs($path, $file, $imageName);
        }
        return redirect()->route('gallery.index')->with('success', 'Gallery has been Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Gallery $gallery): ?\Illuminate\Http\RedirectResponse
    {
        $response = $this->gallery_service->delete($gallery->id);
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

    public function frontendGallery($id) {
        $gallery = $this->gallery_service->find($id);
        return view('frontend.gallery', compact('gallery'));
    }
}
