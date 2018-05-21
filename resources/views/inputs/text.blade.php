<?php
$label = $label ?? title_case($name);
$value = $value ?? isset($resource) && $resource ? $resource->$name : null;
$type = $type ?? 'text'
?>

@component('inputs.layout')
    @slot('label')
        <label for="input-{{ $name }}">{{ $label }}</label>
    @endslot
    <input class="form-control" name="{{ $name }}" id="input-{{ $name }}" value="{{ $value }}" type="{{ $type }}" >
@endcomponent
