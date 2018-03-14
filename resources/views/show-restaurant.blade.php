<ul>
  @foreach($restaurants as $restaurant)
    <li>
      <strong>{{ $restaurant['name'] }}</strong>
      <em>{{ $restaurant['cuisine'] }}</em>
      <br>
      {{ $restaurant['location'] }}
    </li>
  @endforeach
</ul>
