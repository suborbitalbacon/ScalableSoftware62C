@extends('show-layout')

@section('form')
    @include('displays.text', [ 'name' => 'name' ])

    <h2>Users</h2>
    <ul class="list-group">
        @foreach($resource->users as $user)
            <li class="list-group-item">
                <a href="/users/{{ $user->id }}" class="float-right">View</a>
                {{ $user->name }}<br>
                <a href="/countries/{{ $user->country->id }}">{{ $user->country->name }}</a>
            </li>
        @endforeach
    </ul>
@endsection
