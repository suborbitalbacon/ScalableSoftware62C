@extends('resource-layout')

@section('body')
    @parent
    <form action="/{{ $resourceUrl }}{{ isset($resource) ? '/' . $resource->id : '' }}" method="post">
        @if(isset($resource))
            {{ method_field('put') }}
        @endif

        @yield('form')
    </form>
@endsection
