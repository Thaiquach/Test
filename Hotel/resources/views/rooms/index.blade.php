@extends('layouts.main')
@section('content')
<table class="table mt-3">
    <tr style="border:1px solid">
        <th>Id</th>
        <th>Hotel</th>
        <th>Guest</th>
        <th>Discount</th>
        <th>Number</th>
        <th>Type</th>
        <th>Price</th>
        <th>Action</th>
    </tr>
    @foreach($rooms as $room)
        <tr>
            <td>{{ $room->id }}</td>
            <td>{{ $room->hotel_id }}</td>
            <td>{{$room->guest_id}}</td>
            <td>
               
            @foreach($room->discounts as $discounts)
                    <a href="/discounts/{{$discounts->id}}">{{ $discounts->rate }}</a>
                @endforeach
            </td>
            <td>{{ $room->number }}</td>
            <td>{{ $room->types }}</td>
            <td>{{ $room->price }}</td>
            
            <td>
                <a href="/rooms/{{$room->id}}/edit">Edit</a>
                <form action="/rooms/{{ $room->id }}" method="post" style="display: inline">
                    @method('DELETE')
                    @csrf
                    <input type="submit" value="Delete" onclick="return confirm('Are you sure?');">
                </form>
            </td>
        </tr>
    @endforeach
</table>
<input type="button" value="Create" onclick="location='/rooms/create'" />
<a href="/hotels" class="btn btn-success">Hotel</a>
<a href="/guests" class="btn btn-success">Guests</a>
<a href="/discounts" class="btn btn-success">Discount</a>
@endsection