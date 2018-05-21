<?php
$label = $label ?? title_case($name);
$value = $value ?? isset($resource) && $resource ? $resource->$name : null;
?>
<div class="form-group">
    <div>{{ $label }}</div>
    <div>
        {{ $value }}
    </div>
</div>
