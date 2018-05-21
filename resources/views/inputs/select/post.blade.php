<?php
$value = $value ?? isset($resource) && $resource ? $resource->post->id : null;
?>
@component('inputs.select', [
    'name' => 'post_id',
    'label' => 'Post',
])
    <option value="">Select post</option>
    @foreach(\App\Post::query()->with('restaurant')->get() as $post)
        <option value="{{ $post->id }}" {{ $value === $post->id ? 'selected' : '' }}>
            {{ $post->restaurant->name }} - {{ $post->content }}
        </option>
    @endforeach
@endcomponent
