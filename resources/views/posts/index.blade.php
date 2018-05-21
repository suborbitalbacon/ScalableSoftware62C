@extends('table-layout')

@section('table-header')
    <th>Preview</th>
    <th>Date</th>
    <th><span class="sr-only">Actions</span></th>
@endsection

@section('table-body')
    @foreach($resources as $resource)
        <tr>
            <td>{{ substr($resource->content, 0, 40) }}...</td>
            <td>{{ $resource->created_at }}</td>
            <td>
                <a href="posts/{{ $resource->id }}">View</a>
            </td>
        </tr>
    @endforeach
@endsection
