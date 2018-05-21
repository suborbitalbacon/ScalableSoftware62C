<?php
$label = $label ?? title_case($name);
$value = $value ?? isset($resource) && $resource ? $resource->$key : null;
$multiple = isset($multiple) && $multiple ? 'multiple' : '';
?>

@component('inputs.layout')
    @slot('label')
        <label for="input-{{ $name }}">{{ $label }}</label>
    @endslot
    <select name="{{ $name }}" id="input-{{ $name }}" class="form-control" {{ $multiple }}>
        {{ $slot }}
    </select>
@endcomponent
