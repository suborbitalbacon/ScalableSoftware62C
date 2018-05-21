<?php
$label = $label ?? title_case($name);
$multiple = isset($multiple) && $multiple ? 'multiple' : '';
?>

@component('inputs.layout', [ 'label' => $label ])
    @if(is_array($value))
        @foreach($value as $item)
            <span class="badge badge-primary">{{ $item->name }}</span>
        @endforeach
    @else
        <span class="badge badge-primary">{{ $value->name }}</span>
    @endif
@endcomponent
