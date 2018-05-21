@extends('table-layout')

@section('table-header')
    <th>Post</th>
    <th>Comment</th>
    <th>User</th>
    <th><span class="sr-only">Actions</span></th>
@endsection

@section('table-body')
    @foreach($resources as $resource)
        <tr>
            <td>{{ substr($resource->post->content, 0, 40) }}...</td>
            <td>{{ $resource->content }}</td>
            <td>{{ $resource->user->name }}</td>
            <td>
                <a href="comments/{{ $resource->id }}">View</a>
            </td>
        </tr>
    @endforeach
@endsection
