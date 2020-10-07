<?php

namespace App\Http\Controllers;

use App\Crud;
use App\Http\Requests\EmployeeRequest;
use App\Services\EmployeeService;
use App\Services\PermissionService;
use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
{

    public $employee_service;
    public $permission_service;

    public function __construct()
    {

        $this->employee_service = new EmployeeService();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = $this->employee_service->all();
        return view('backend.employee.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = $this->permission_service;
        return view('backend.employee.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeeRequest $request)
    {
        $this->employee_service->store($request->except(['_token']));
        return redirect()->route('employee.index')->with('success', 'Employee has been Created Successfully!');
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
    public function edit(Employee $employee)
    {

        $employeePermissions = $employee->permissions->pluck('id')->toArray();
        return view('backend.employee.edit', compact('employee','employeePermissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->except(['_token','_method']);
        $this->employee_service->update($data, $id);

        return redirect()->route('employee.index')->with('success', 'Data is successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $this->employee_service->delete($employee->id);
        return redirect()->route('employee.index')->with('success', 'Employee has been Deleted Successfully!');
    }
}
