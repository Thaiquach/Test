@extends('layouts.main')
@section('content')
<form action="/guests" method="post">
@csrf
  <div class="mb-3 mt-3">
    <label for="name" class="form-label">Name:</label>
    <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email:</label>
    <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
  </div>
  <div class="mb-3">
    <label for="phonenumber" class="form-label">Phonenumber:</label>
    <input type="text" class="form-control" id="phonenumber" placeholder="Enter phonenumber" name="phonenumber">
  </div>
  <button type="submit" class="btn btn-primary" value="Create">Submit</button>
</form>
@endsection