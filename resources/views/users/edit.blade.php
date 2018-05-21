@extends('edit-layout')

@section('form')
    @include('inputs.text', [ 'name' => 'name' ])
    @include('inputs.text', [ 'name' => 'email', 'type' => 'email' ])
    @include('inputs.text', [ 'name' => 'password', 'type' => 'password' ])
    @include('inputs.select.country')
    @include('inputs.select.roles')
    <button type="submit" class="btn btn-primary">Save</button>
@endsection
