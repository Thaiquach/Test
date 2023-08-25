@extends('layouts.main')
@section('content')
<form action="/guests/{{ $guest->id }}" method="post">
    @method('PUT')
    @csrf
    <div class="mb-3 mt-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" name="name" id="name" value="{{$guest->name}}" class="form-control">
    </div>
    <div class="mb-3 mt-3">
    <label for="email" class="form-label">Email</label>
    <input type="text" name="email" id="email" value="{{$guest->email}}" class="form-control">
    </div>
    <div class="mb-3 mt-3">
    <label for="phonenumber" class="form-label">Phone</label>
    <input type="text" name="phonenumber" id="phonenumber" value="{{$guest->phonenumber}}" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary" value="Edit">Edit</button>
</form>
@endsection