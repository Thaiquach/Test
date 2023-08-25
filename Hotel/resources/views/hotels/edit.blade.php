@extends('layouts.main')
@section('content')
<form action="/hotels/{{ $hotels->id }}" method="post">
    @method('PUT')
    @csrf
    <div class="mb-3 mt-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" name="name" id="name" value="{{$hotels->name}}" class="form-control">
    </div>
    <div class="mb-3 mt-3">
    <label for="address" class="form-label">Address</label>
    <input type="text" name="address" id="address" value="{{$hotels->address}}" class="form-control">
    </div>
    <div class="mb-3 mt-3">
    <label for="phone" class="form-label">Phone</label>
    <input type="text" name="phone" id="phone" value="{{$hotels->phone}}" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary" value="Edit">Edit</button>
</form>
@endsection

<!-- -->