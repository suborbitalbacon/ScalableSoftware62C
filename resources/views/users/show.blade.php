@extends('show-layout')

@section('form')
    @include('displays.text', [ 'name' => 'name' ])
    @include('displays.text', [ 'name' => 'email', 'type' => 'email' ])
    @include('displays.text', [ 'name' => 'password', 'type' => 'password' ])
    @include('displays.select.country')
    @include('displays.select.roles')

    <h2>Posts</h2>
    <ul class="list-group">
        @foreach($resource->posts as $post)
            <li class="list-group-item">
                <a href="/posts/{{ $post->id }}" class="float-right">View</a>
                {{ $post->content }}

                <div>
                    <span class="float-right">{{ $post->created_at }}</span>
                    <a href="/restaurants/{{ $post->restaurant->id }}">{{ $post->restaurant->name }}</a>,
                    <a href="/countries/{{ $post->user->country->id }}">{{ $post->user->country->name }}</a>
                </div>
            </li>
        @endforeach
    </ul>

    <br>
    <h2>Comments</h2>
    <ul class="list-group">
        @foreach($resource->comments as $comment)
            <li class="list-group-item">
                <a href="/comments/{{ $comment->id }}" class="float-right">View</a>
                {{ $comment->content }}

                <div>
                    <span class="float-right">{{ $comment->created_at }}</span>
                    <a href="/posts/{{ $comment->post->id }}">{{ $comment->post->restaurant->name }} - {{ substr($comment->post->content, 0, 20) }}</a>
                </div>
            </li>
        @endforeach
    </ul>
@endsection
