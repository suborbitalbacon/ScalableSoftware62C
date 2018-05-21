@extends('edit-layout')

@section('form')
    @include('inputs.select.post')
    @include('inputs.select.user')
    @include('inputs.textarea', [ 'name' => 'content' ])
    <button type="submit" class="btn btn-primary">Save</button>
@endsection
