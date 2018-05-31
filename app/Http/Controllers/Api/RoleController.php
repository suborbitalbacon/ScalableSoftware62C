<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    protected $name = 'roles';

    public function index()
    {
        return Role::all();
    }

    public function show(Role $role = null)
    {
        return $role;
    }

    public function store(Request $request)
    {
        return $this->update($request);
    }

    public function update(Request $request, Role $role = null)
    {
        $data = $this->validate($request, [
            'name' => 'required|string',
        ]);
        save(Role::class, $role, $data);
        return $role;
    }

    public function destroy(Role $role)
    {
        $role->delete();
    }
}
