@extends('show-layout')

@section('form')
    @include('displays.select.post')
    @include('displays.select.user')
    @include('displays.textarea', [ 'name' => 'content' ])
@endsection
