<?php
$value = $value ?? isset($resource) && $resource ? $resource->user->id : null;
?>
@component('inputs.select', [
    'name' => 'user_id',
    'label' => 'Users',
])
    <option value="">Select user</option>
    @foreach(\App\User::all() as $user)
        <option value="{{ $user->id }}" {{ $value === $user->id ? 'selected' : '' }}>
            {{ $user->name }}
        </option>
    @endforeach
@endcomponent

