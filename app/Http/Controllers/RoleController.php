<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoleRequest;
use App\Services\PermissionService;
use App\Services\RoleService;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public $role_service;
    public $permission_service;

    public function __construct()
    {
        /* Check User Permission to Perform Action */
        $this->authorizeResource(Role::class, 'role');

        $this->role_service = new RoleService();
        $this->permission_service = new PermissionService();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = $this->role_service->all();
        return view('backend.role.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = $this->permission_service->groupedBy();
        return view('backend.role.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoleRequest $request)
    {
        $this->role_service->store($request->except('_token'));
        return redirect()->route('role.index')->with('success', 'Role has been Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        $rolePermissions = $role->permissions->pluck('id')->toArray();
        $permissions = $this->permission_service->groupedBy();
        return view('backend.role.show', compact('role','rolePermissions', 'permissions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        $rolePermissions = $role->permissions->pluck('id')->toArray();
        $permissions = $this->permission_service->groupedBy();
        return view('backend.role.edit', compact('role','rolePermissions', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RoleRequest $request, Role $role)
    {
        $this->role_service->update($request->except(['_token', '_method']), $role->id);
        return redirect()->route('role.index')->with('success', 'Role has been Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $this->role_service->delete($role->id);
        return redirect()->route('role.index')->with('success', 'Role has been Deleted Successfully!');
    }
}
