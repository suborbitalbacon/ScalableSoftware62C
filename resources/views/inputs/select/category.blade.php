<?php
$value = $value ?? isset($resource) && $resource ? $resource->category->id : null;
?>
@component('inputs.select', [
    'name' => 'category_id',
    'label' => 'Categories',
])
    <option value="">Select category</option>
    @foreach(\App\Category::all() as $category)
        <option value="{{ $category->id }}" {{ $value === $category->id ? 'selected' : '' }}>
            {{ $category->name }}
        </option>
    @endforeach
@endcomponent
