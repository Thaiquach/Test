@extends('layouts.main')
@section('content')
<form action="/discounts/{{ $discounts->id }}" method="post">
    @method('PUT')
    @csrf
    <div class="mb-3 mt-3">
    <label for="rate" class="form-label">Rate</label>
    <input type="text" name="rate" id="rate" value="{{$discounts->rate}}" class="form-control" >
    </div>
    <div class="mb-3 mt-3">
    <label for="type" class="form-label">Type</label>
    <input type="text" name="type" id="type" value="{{$discounts->type}}" class="form-control" >
    </div>
    <button type="submit" class="btn btn-primary" value="Edit">Edit</button>
</form>
@endsection