@extends('show-layout')

@section('form')
    @include('displays.select.restaurant')
    @include('displays.select.user')
    @include('displays.textarea', [ 'name' => 'content' ])

    <h2>Comments</h2>
    <ul class="list-group">
        @foreach($resource->comments as $comment)
            <li class="list-group-item">
                <a href="/comments/{{ $comment->id }}" class="float-right">View</a>
                {{ $comment->content }}

                <div>
                    <span class="float-right">{{ $comment->created_at }}</span>
                    <a href="/users/{{ $comment->user->id }}">{{ $comment->user->name }}</a>,
                    <a href="/countries/{{ $comment->user->country->id }}">{{ $comment->user->country->name }}</a>
                </div>
            </li>
        @endforeach
    </ul>
@endsection
