@extends('table-layout')

@section('table-header')
    <th>Name</th>
    <th>Email</th>
    <th>Roles</th>
    <th><span class="sr-only">Actions</span></th>
@endsection

@section('table-body')
    @foreach($resources as $resource)
        <tr>
            <td>{{ $resource->name }}</td>
            <td>{{ $resource->email }}</td>
            <td>
                @foreach($resource->roles as $role)
                    <span class="badge badge-primary">{{ $role->name }}</span>
                @endforeach
            </td>
            <td>
                <a href="users/{{ $resource->id }}">View</a>
            </td>
        </tr>
    @endforeach
@endsection
