@extends('layout')

@section('body')
    <h1>Restaurants</h1>
    <ul>
        @foreach($restaurants as $restaurant)
            <li>
                <strong>{{ $restaurant['name'] }}</strong>
                <br>
                <em>{{ $restaurant['phone'] }}</em>
                <br>
                Address:
                <br>
                {{ $restaurant['address1'] }}
                @if($restaurant['address2'])
                    <br>
                    {{ $restaurant['address2'] }}
                @endif
                <br>
                {{ $restaurant['suburb'] }}
                <br>
                {{ $restaurant['state'] }}
            </li>
        @endforeach
    </ul>
    {{ $restaurants->links() }}
@endsection
