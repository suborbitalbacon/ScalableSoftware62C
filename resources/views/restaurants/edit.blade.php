@extends('edit-layout')

@section('form')
    <div class="row">
        <div class="col-md">
            @include('inputs.text', [ 'name' => 'name' ])
            @include('inputs.text', [ 'name' => 'phone' ])
            @include('inputs.text', [ 'name' => 'seats', 'type' => 'number' ])
            @include('inputs.select.country')
            @include('inputs.select.category')
        </div>
        <div class="col-md">
            @include('inputs.text', [ 'name' => 'address1', 'label' => 'Address line 1' ])
            @include('inputs.text', [ 'name' => 'address2', 'label' => 'Address line 2' ])
            @include('inputs.text', [ 'name' => 'suburb' ])
            @include('inputs.text', [ 'name' => 'state' ])
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Save</button>
@endsection
