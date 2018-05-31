@extends('show-layout')

@section('form')
    @include('displays.text', [ 'name' => 'name' ])

    <h2>Restaurants</h2>
    <ul class="list-group">
        @foreach($resource->restaurants as $restaurant)
            <li class="list-group-item">
                <a href="/restaurants/{{ $restaurant->id }}" class="float-right">View</a>
                <strong>{{ $restaurant->name }}</strong><br>
                <em>{{ $restaurant->phone }}</em><br>
                {{ $restaurant->address1 }}<br>
                @if($restaurant->address2)
                    {{ $restaurant->address2 }}<br>
                @endif
            </li>
        @endforeach
    </ul>
@endsection
