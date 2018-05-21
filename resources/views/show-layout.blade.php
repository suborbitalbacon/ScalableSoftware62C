@extends('resource-layout')

@section('body')
    <a class="float-right" href="{{ $resource->id }}/edit">Edit</a>
    @parent

    @yield('form')
@endsection
