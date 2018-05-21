@extends('show-layout')

@section('form')
    @include('displays.text', [ 'name' => 'name' ])
    @include('displays.text', [ 'name' => 'email', 'type' => 'email' ])
    @include('displays.text', [ 'name' => 'password', 'type' => 'password' ])
    @include('displays.select.country')
    @include('displays.select.roles')
@endsection
