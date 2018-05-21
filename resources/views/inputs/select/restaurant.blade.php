<?php
$value = $value ?? isset($resource) && $resource ? $resource->restaurant->id : null;
?>
@component('inputs.select', [
    'name' => 'restaurant_id',
    'label' => 'Restaurants',
])
    <option value="">Select restaurant</option>
    @foreach(\App\Restaurant::all() as $restaurant)
        <option value="{{ $restaurant->id }}" {{ $value === $restaurant->id ? 'selected' : '' }}>
            {{ $restaurant->name }}
        </option>
    @endforeach
@endcomponent
