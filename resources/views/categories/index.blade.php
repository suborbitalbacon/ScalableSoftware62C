@extends('table-layout')

@section('table-header')
    <th>Name</th>
    <th><span class="sr-only">Actions</span></th>
@endsection

@section('table-body')
    @foreach($resources as $resource)
        <tr>
            <td>{{ $resource->name }}</td>
            <td>
                <a href="categories/{{ $resource->id }}">View</a>
            </td>
        </tr>
    @endforeach
@endsection
