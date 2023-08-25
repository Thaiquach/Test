@extends('layouts.main')
@section('content')
<form action="/rooms/{{ $rooms->id }}" method="post">
    @method('PUT')
    @csrf
    <label for="hotel_id">Hotel</label>
    <select name="hotel_id" id="hotel_id" class="form-select">
        @foreach($hotels as $hotel)
            <option value="{{$hotel->id}}" @if($hotel->id == $rooms->hotel_id) selected @endif>{{$hotel->name}}</option>
        @endforeach
    </select>
    <br>
    <label for="guest_id">Guest</label>
    <select name="guest_id" id="guest_id" class="form-select" >
        @foreach($guests as $guest)
            <option value="{{$guest->id}}" @if($guest->id == $rooms->guest_id) selected @endif>{{$guest->name}}</option>
        @endforeach
    </select>
    <br>
    <label for="discounts">Discount</label>
    <select name="discounts[]" id="discounts" multiple class="form-select">
        @foreach($discounts as $discount)
        <option value="{{$discount->id}}" @if(in_array($discount->id, $discount->pluck('id')->toArray())) selected @endif>{{$discount->id}}</option>
        @endforeach
    </select>
    <div class="mb-3 mt-3">
    <label for="number" class="form-label">Rate:</label>
    <input type="text" class="form-control" id="number" placeholder="Enter number" name="number" value="{{$rooms->number}}">
  </div>
  <div class="mb-3">
    <label for="types" class="form-label">Type:</label>
    <input type="text" class="form-control" id="types" placeholder="Enter types" name="types" value="{{$rooms->types}}">
  </div>
  <div class="mb-3">
    <label for="price" class="form-label">Price:</label>
    <input type="text" class="form-control" id="price" placeholder="Enter price" name="price" value="{{$rooms->price}}">
  </div>
  
  <button type="submit" class="btn btn-primary">Edit</button>
</form>
@endsection

