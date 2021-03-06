<?php

namespace App\Http\Controllers;

use App\Http\Requests\DownloadRequest;
use App\Http\Requests\UpdateDownloadRequest;
use App\Services\DownloadService;
use Illuminate\Http\Request;
use App\Download;

class DownloadController extends Controller
{
    public $download_service;

    public function __construct()
    {
        $this->download_service = new DownloadService();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $downloads = $this->download_service->all();
        return view('backend.downloads.index', compact('downloads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.downloads.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DownloadRequest $request)
    {
        if ($this->download_service->findByClause(['category' => 'Player Registration'])->first()) {
            return redirect()->route('download.index')->with('error', 'Player Registration document already added!');
        }
        $this->download_service->store($request->except(['_token']));
        return redirect()->route('download.index')->with('success', 'Download File has been Added Successfully!');
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
    public function edit($download)
    {
        $download = $this->download_service->findOne(decodeData($download));
        return view('backend.downloads.edit', compact('download'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDownloadRequest $request, Download $download)
    {
        $data = $request->except('_token', '_method', 'action');
        $this->download_service->update($data, $download['id']);

        return redirect()->route('download.index')->with('success', 'Download File has been Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($download)
    {
        $this->download_service->delete(decodeData($download));
        return redirect()->route('download.index')->with('success', 'File has been Deleted Successfully!');
    }

    public function frontend_download_files(){
        $download_files = $this->download_service->findByClause(['category' => 'Downloads'])->get();
        return view('frontend.download', compact('download_files'));
    }
}
