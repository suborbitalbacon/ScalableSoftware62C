<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    protected $name = 'roles';

    public function index()
    {
        $roles = Role::all();
        return $this->view('index')
            ->with('resources', $roles);
    }

    public function show(Role $role = null)
    {
        return $this->view('show')
            ->with('resource', $role);
    }

    public function edit(Role $role = null)
    {
        return $this->view('edit')
            ->with('resource', $role);
    }

    public function save(Request $request, Role $role = null)
    {
        $data = $this->validate($request, [
            'name' => 'required|string',
        ]);
        save(Role::class, $role, $data);
        return $this->redirect();
    }

    public function destroy(Role $role)
    {
        $role->delete();
        return $this->redirect();
    }
}
