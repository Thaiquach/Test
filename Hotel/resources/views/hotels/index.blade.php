@extends('layouts.main')
@section('content')
<table class="table mt-3">
    <tr style="border:1px solid">
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Action</th>
    </tr>
    @foreach($hotels as $hotel)
        <tr>
            <td>{{ $hotel->id }}</td>
            <td>{{ $hotel->name }}</td>
            <td>{{ $hotel->address }}</td>
            <td>{{ $hotel->phone }}</td>
            
            <td>
                <a href="/hotels/{{$hotel->id}}/edit">Edit</a>
                <form action="/hotels/{{ $hotel->id }}" method="post" style="display: inline">
                    @method('DELETE')
                    @csrf
                    <input type="submit" value="Delete" onclick="return confirm('Are you sure?');">
                </form>
            </td>
        </tr>
    @endforeach
</table>
<input type="button" value="Create" onclick="location='/hotels/create'" />
<a href="/rooms" class="btn btn-success">Room</a>
<a href="/guests" class="btn btn-success">Guests</a>
<a href="/discounts" class="btn btn-success">Discount</a>
@endsection