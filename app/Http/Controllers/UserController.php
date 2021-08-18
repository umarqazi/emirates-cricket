<?php

namespace App\Http\Controllers;

use App\Http\Requests\SetPasswordRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\UserRequest;
use App\Notifications\SetPasswordNotification;
use App\Services\RoleService;
use App\Services\UserService;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public $user_service;
    public $role_service;

    public function __construct()
    {
        $this->user_service = new UserService();
        $this->role_service = new RoleService();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = $this->user_service->all();
        return view('backend.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = $this->role_service->all();
        return view('backend.user.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $params = $request->except(['_token']);
        $token = md5(rand(1, 10) . microtime());
        $params['token'] = $token;
        $user = $this->user_service->store($params);

        if (!empty($user)) {
            $role = $this->role_service->find($request->role);
            $user->assignRole($role->name);

            /* Send Password Notification */
            $user->notify(new SetPasswordNotification($user));
            return redirect()->route('user.index')->with('success', 'User has been created, Please ask User to set Password.');
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
    public function edit($user)
    {
        $user = $this->user_service->findOne(decodeData($user));
        $roles = $this->role_service->all();
        return view('backend.user.edit', compact('roles', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $status = $this->user_service->update($request->except(['_token', '_method', 'role']), $user->id);
        if (!empty($status)) {
            $role = $this->role_service->find($request->role);
            $roles = array($role->name);
            $user->syncRoles($roles);
            return redirect()->route('user.index')->with('success', 'User has been Updated Successfully!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($user)
    {
        $status = $this->user_service->delete(decodeData($user));
        if (!empty($status)) {
            return redirect()->route('user.index')->with('success', 'User has been Deleted Successfully!');
        }
    }

    /**
     * Show Password Page
     *
     */
    public function setPassword(Request $request) {
        $token = $request->route('token');
        return view('auth.passwords.set-password', compact('token'));
    }

    /**
     * Set User Password
     *
     * @param Request $request
     */
    public function storePassword(SetPasswordRequest $request) {
        $params = $request->except('_token');
        $user = $this->user_service->setPassword($params);
        if (!empty($user)) {
            return redirect()->back()->with('success', 'Your Password has been Set Successfully!');
        }
    }
}
