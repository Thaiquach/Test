@extends('layouts.main')
@section('content')
<!-- <form action="/hotels" method="post">
    @csrf
    <br>
    <label for="name">Name</label>
    <input type="text" name="name" id="name">
    <br>
    <label for="address">Address</label>
    <input type="text" name="address" id="address">
    <br>
    <label for="phone">Phone</label>
    <input type="text" name="phone" id="phone">
    <br>
    <input type="submit" value="Create">
</form> -->


<form action ="/hotels" method="post">
@csrf
  <div class="mb-3 mt-3">
    <label for="name" class="form-label">Name:</label>
    <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
  </div>
  <div class="mb-3">
    <label for="address" class="form-label">Address:</label>
    <input type="text" class="form-control" id="address" placeholder="Enter address" name="address">
  </div>
  <div class="mb-3">
    <label for="phone" class="form-label">Phone:</label>
    <input type="text" class="form-control" id="phone" placeholder="Enter phone" name="phone">
  </div>
  <button type="submit" class="btn btn-primary" value="Create">Submit</button>
</form>
@endsection