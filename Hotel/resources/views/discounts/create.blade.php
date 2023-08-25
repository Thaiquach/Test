@extends('layouts.main')
@section('content')
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
