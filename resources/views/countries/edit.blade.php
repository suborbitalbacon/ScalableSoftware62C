@extends('edit-layout')

@section('form')
    @include('inputs.text', [ 'name' => 'name' ])
    <button type="submit" class="btn btn-primary">Save</button>
@endsection
