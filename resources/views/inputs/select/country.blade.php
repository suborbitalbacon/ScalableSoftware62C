<?php
$value = $value ?? isset($resource) && $resource ? $resource->country->id : null;
?>

@component('inputs.select', [
    'name' => 'country_id',
    'label' => 'Countries',
])
    <option value="">Select country</option>
    @foreach(\App\Country::all() as $country)
        <option value="{{ $country->id }}" {{ $value === $country->id ? 'selected' : '' }}>
            {{ $country->name }}
        </option>
    @endforeach
@endcomponent
