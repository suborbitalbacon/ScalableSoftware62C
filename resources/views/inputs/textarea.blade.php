<?php
$label = $label ?? title_case($name);
$value = $value ?? isset($resource) && $resource ? $resource->$key : null;
?>
<div class="form-group">
    <label for="input-{{ $name }}">{{ $label }}</label>
    <textarea class="form-control" name="{{ $name }}" id="input-{{ $name }}" rows="10">{{ $value }}</textarea>
</div>
