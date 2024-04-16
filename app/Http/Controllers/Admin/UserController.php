<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreRequest;
use App\Http\Requests\User\UpdateRequest;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', ['users' => $users]);
    }

    public function show(User $user)
    {
        return view('admin.users.show', ['user' => $user]);
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        User::query()->create($data);
        return Redirect::route('admin.users.index');
    }

    public function edit(User $user)
    {
        return view('admin.users.edit', ['user' => $user]);
    }
    public function update(UpdateRequest $request, User $user)
    {
        $data = $request->validated();
        $user->update($data);
        return Redirect::route('admin.users.index');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return Redirect::route('admin.users.index');
    }
}
