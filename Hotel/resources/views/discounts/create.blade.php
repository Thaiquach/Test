@extends('layouts.main')
@section('content')
<!-- <form action="/discounts" method="post">
    @csrf
    <br>
    <label for="rate">Rate</label>
    <input type="text" name="rate" id="rate">
    <br>
    <label for="type">Type</label>
    <input type="text" name="type" id="type">
    <br>
    <input type="submit" value="Create">
</form> -->


<form action="/guests" method="post">
@csrf
  <div class="mb-3 mt-3">
    <label for="rate" class="form-label">Rate:</label>
    <input type="text" class="form-control" id="rate" placeholder="Enter rate" name="rate">
  </div>
  <div class="mb-3">
    <label for="type" class="form-label">Type:</label>
    <input type="text" class="form-control" id="type" placeholder="Enter type" name="type">
  </div>
  <button type="submit" class="btn btn-primary" value="Create">Submit</button>
</form>
@endsection