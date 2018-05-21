<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $name = 'users';

    public function index()
    {
        $categories = User::all();
        return $this->view('index')
            ->with('resources', $categories);
    }

    public function show(User $user = null)
    {
        return $this->view('show')
            ->with('resource', $user);
    }

    public function edit(User $user = null)
    {
        return $this->view('edit')
            ->with('resource', $user);
    }

    public function save(Request $request, User $user = null)
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
        return $this->redirect();
    }

    public function destroy(User $user)
    {
        $user->delete();
        return $this->redirect();
    }
}
