<?php

namespace App\Http\Controllers;

use App\BusinessLayer\UserBusinessLayer;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    private $userBusinessLayer;

    public function __construct(UserBusinessLayer $userBusinessLayer) {
        $this->userBusinessLayer = $userBusinessLayer;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $users = $this->userBusinessLayer->getAll();
        return view('backend.pages.user.index', compact('users'));
    }

    /**
     * Show deatail user
     */
    public function show(User $user): View
    {
        $roles = Role::all();
        return view('backend.pages.user.show', compact('user', 'roles'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $roles = Role::all();
        return view('backend.pages.user.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request): RedirectResponse
    {
        $this->userBusinessLayer->store($request->validated());
        return redirect(route('user.index'))->with('success', 'new user has been created');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user): View
    {
        $roles = Role::all();
        return view('backend.pages.user.edit', compact('user', 'roles'));
    }

     /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, $id): RedirectResponse
    {
        $this->userBusinessLayer->update($request->validated(), $id);
        return redirect(route('user.index'))->with('success', 'user has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        $this->userBusinessLayer->delete($id);
        return redirect(route('user.index'))->with('success','user has been deleted');
    }
}
