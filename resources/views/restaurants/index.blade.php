@extends('table-layout')

@section('table-header')
    <th>Name</th>
    <th>Phone</th>
    <th>Address</th>
    <th>Seats</th>
    <th>Country</th>
    <th>Category</th>
    <th><span class="sr-only">Actions</span></th>
@endsection

@section('table-body')
    @foreach($resources as $resource)
        <tr>
            <td>{{ $resource->name }}</td>
            <td>{{ $resource->phone }}</td>
            <td>
                {{ $resource->address1 }}<br>
                @if($resource->address2)
                    {{ $resource->address2 }}<br>
                @endif
                {{ $resource->suburb }}<br>
                {{ $resource->state }}
            </td>
            <td>{{ $resource->seats }}</td>
            <td>{{ $resource->country->name }}</td>
            <td>
                <span class="badge badge-primary">{{ $resource->category->name }}</span>
            </td>
            <td>
                <a href="restaurants/{{ $resource->id }}">View</a>
            </td>
        </tr>
    @endforeach
@endsection
