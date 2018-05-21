<?php
$label = $label ?? title_case($name);
$value = $value ?? isset($resource) && $resource ? $resource->$name : null;
$type = $type ?? 'text'
?>

@component('inputs.layout', [ 'label' => $label ])
    {{ $value }}
@endcomponent
