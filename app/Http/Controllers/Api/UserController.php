<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $name = 'users';

    public function index()
    {
        return User::all();
    }

    public function show(User $user = null)
    {
        return $user;
    }

    public function store(Request $request)
    {
        return $this->update($request);
    }

    public function update(Request $request, User $user = null)
    {
        $data = $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string',
            'country_id' => 'required|integer|exists:countries,id',
            'roles.*' => 'integer|exists:roles,id',
        ]);
        $roles = partition('roles', $data);
        $user = save(User::class, $user, $data);
        $user->roles()->sync($roles);
        return $user;
    }

    public function destroy(User $user)
    {
        $user->delete();
    }
}
