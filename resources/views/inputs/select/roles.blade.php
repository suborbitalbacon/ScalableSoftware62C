<?php
$value = $value ?? isset($resource) && $resource ? $resource->roles->pluck('id') : null;
?>
@component('inputs.select', [
    'name' => 'roles',
    'label' => 'Roles',
    'multiple' => true,
])
    @foreach(\App\Role::all() as $role)
        <option value="{{ $role->id }}" {{ $value->contains($role->id) ? 'selected' : '' }}>
            {{ $role->name }}
        </option>
    @endforeach
@endcomponent
