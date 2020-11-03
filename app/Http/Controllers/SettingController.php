<?php

namespace App\Http\Controllers;

use App\Http\Requests\SettingRequest;
use App\Services\ImageService;
use App\Services\SettingService;
use App\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public $setting_service;
    public $image_service;

    public function __construct()
    {
        /* Check User Permission to Perform Action */
//        $this->authorizeResource(Setting::class, 'setting');

        $this->setting_service = new SettingService();
        $this->image_service = new ImageService();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $setting = $this->setting_service->first();

        if (empty($setting)) {
            return view('backend.setting.create');
        } else {
            return view('backend.setting.edit', compact('setting'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SettingRequest $request)
    {
        $params = $request->except(['_token', 'images']);

        $setting = $this->setting_service->store($params);
        if (!empty($setting)) {
            /* For Polymorphic Relation */
            $this->image_service->storeSliderImage($setting, $request->except(['_token']));

            return redirect()->route('setting.create')->with('success', 'Setting has been Created!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SettingRequest $request, Setting $setting)
    {
        $settingObj = $this->setting_service->first();
        $params = $request->except(['_token', '_method', 'images']);

        $status = $this->setting_service->update($setting->id, $params);
        if (!empty($status)) {
            /* For Polymorphic Relation */
            $this->image_service->updateSliderImage($settingObj, $request->except(['_token', '_method']));
            return redirect()->route('setting.create')->with('success', 'Setting has been Updated!');
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

    public function uploadSliderImages(Request $request)
    {
        $path = public_path('storage/uploads/temp/homepage-slider-images');

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
}
