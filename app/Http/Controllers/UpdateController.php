<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateRequest;
use App\Services\UpdateService;
use App\Update;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public $update_service;

    public function __construct()
    {
        /* Check User Permission to Perform Action */
        $this->authorizeResource(Update::class, 'update');

        $this->update_service = new UpdateService();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $updates = $this->update_service->all();
        return view('backend.update.index', compact('updates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.update.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UpdateRequest $request)
    {
        $update = $this->update_service->store($request->except('_token'));
        if (!empty($update)) {
            return redirect()->route('update.index')->with('success', 'An Update has been Created Successfully!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Update $update)
    {
        return view('backend.update.show', compact('update'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Update $update)
    {
        return view('backend.update.edit', compact('update'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Update $update)
    {
        $update = $this->update_service->update($request->except(['_token', '_method', 'action']), $update->id);

        if (!empty($update)) {
            return redirect()->route('update.index')->with('success', 'An Update has been Updated Successfully!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Update $update)
    {
        $status = $this->update_service->delete($update->id);
        if (!empty($status)) {
            return redirect()->back()->with('success', 'An Update has been Deleted Successfully!');
        }
    }
}
