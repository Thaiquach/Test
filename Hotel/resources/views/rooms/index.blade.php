<table style="border:1px solid">
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
            <td><a href="/hotels/{{$room->hotel->id}}">{{ $room->hotel->name }}</a></td>
            <td><a href="/guests/{{$room->guest->id}}">{{ $room->guest->name }}</a></td>
            <td>
                @foreach($room->discounts as $discount)
                    <a href="/discounts/{{$discount->id}}">{{ $discount->id }}</a>
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