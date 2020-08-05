<?php

namespace App\Http\Controllers;

use App\Http\Requests\PermissionRequest;
use App\Services\PermissionService;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public $permission_service;

    public function __construct()
    {
        $this->permission_service = new PermissionService();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permissions = $this->permission_service->all();
        return view('backend.permission.index', compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.permission.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PermissionRequest $request)
    {
        $this->permission_service->store($request->except(['_token', 'action']));
        return redirect()->route('permission.index')->with('success', 'Permission has been Created Successfully!');
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
        $permission = $this->permission_service->find($id);
        return view('backend.permission.edit', compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PermissionRequest $request, $id)
    {
        $this->permission_service->update($request->except(['_token', 'action', '_method']), $id);
        return redirect()->route('permission.index')->with('success', 'Permission has been Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->permission_service->delete($id);
        return redirect()->route('permission.index')->with('success', 'Permission has been Deleted Successfully!');
    }
}
