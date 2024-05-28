<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreRequest;
use App\Http\Requests\User\UpdateRequest;
use App\Http\Resources\User\UserResource;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return UserResource::collection($users);
    }

    public function show(User $user)
    {
        return UserResource::make($user);
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $user = User::query()->create($data);
        return UserResource::make($user);
    }

    public function edit(User $user)
    {
        return view('admin.users.edit', ['user' => $user]);
    }
    public function update(UpdateRequest $request, User $user)
    {
        $data = $request->validated();
        $user->update($data);
        return UserResource::make($user);
    }

    public function destroy(User $user)
    {
        $user->delete();
        return response()->json([
            'message' => 'done'
        ]);
    }
}
