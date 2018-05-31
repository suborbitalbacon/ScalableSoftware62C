@extends('show-layout')

@section('form')
    <div class="row">
        <div class="col-md">
            @include('displays.text', [ 'name' => 'name' ])
            @include('displays.text', [ 'name' => 'phone' ])
            @include('displays.text', [ 'name' => 'seats', 'type' => 'number' ])
            @include('displays.select.country')
            @include('displays.select.category')
        </div>
        <div class="col-md">
            @include('displays.text', [ 'name' => 'address1', 'label' => 'Address line 1' ])
            @include('displays.text', [ 'name' => 'address2', 'label' => 'Address line 2' ])
            @include('displays.text', [ 'name' => 'suburb' ])
            @include('displays.text', [ 'name' => 'state' ])
        </div>
    </div>

    <h2>Posts</h2>
    <ul class="list-group">
        @foreach($resource->posts as $post)
            <li class="list-group-item">
                <a href="/posts/{{ $post->id }}" class="float-right">View</a>
                {{ $post->content }}

                <div>
                    <span class="float-right">{{ $post->created_at }}</span>
                    <a href="/users/{{ $post->user->id }}">{{ $post->user->name }}</a>,
                    <a href="/countries/{{ $post->user->country->id }}">{{ $post->user->country->name }}</a>
                </div>
            </li>
        @endforeach
    </ul>

    <br>
    <h2>Make a post</h2>
    <form action="/posts" method="post">
        <input type="hidden" name="restaurant_id" value="{{ $resource->id }}">
        @include('inputs.select.user', [ 'value' => '' ])
        @include('inputs.textarea', [ 'name' => 'content', 'value' => '' ])
        <button class="btn btn-primary float-right" type="submit">Post</button>
    </form>
@endsection
