@extends('layouts.main')
@section('content')
<form action="/rooms" method="post">
@csrf
    <label for="hotel_id">Hotel</label>
    <select name="hotel_id" id="hotel_id" class="form-select">
        @foreach($hotels as $hotel)
            <option value="{{$hotel->id}}">{{$hotel->name}}</option>
        @endforeach
    </select>
    <br>
    <label for="guest_id">Guest</label>
    <select name="guest_id" id="guest_id" class="form-select" >
        @foreach($guests as $guest)
            <option value="{{$guest->id}}">{{$guest->name}}</option>
        @endforeach
    </select>
    <br>
    <label for="discounts">Discount</label>
    <select name="discounts[]" id="discounts" multiple class="form-select">
        @foreach($discounts as $discount)
            <option value="{{$discount->id}}">{{$discount->id}}</option>
        @endforeach
    </select>
  <div class="mb-3 mt-3">
    <label for="number" class="form-label">Number:</label>
    <input type="text" class="form-control" id="number" placeholder="Enter number" name="number">
  </div>
  <div class="mb-3">
    <label for="types" class="form-label">Type:</label>
    <input type="text" class="form-control" id="types" placeholder="Enter types" name="types">
  </div>
  <div class="mb-3">
    <label for="price" class="form-label">Price:</label>
    <input type="text" class="form-control" id="price" placeholder="Enter price" name="price">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection