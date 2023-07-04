@extends('layouts.base')
@section('contents')   
<h1>Create Post</h1>


<from method="POST" action="{{ route('travels.store')}}">
@csrf
<div class="mb-3">
  <label for="title" class="form-label">Title</label>
  <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
</div>

<div class="mb-3">
    <label for="text" class="form-label">Text</label>
    <textarea type="text" class="form-control" id="text" name="text" rows="3" value="{{old('text')}}"></textarea>
</div>

<div class="mb-3">
  <label for="image" class="form-label">Image</label>
  <input type="text" class="form-control" id="image" name="image" value="{{old('image')}}">
</div>

<div class="mb-3">
    <label for="country" class="form-label">Country</label>
    <input type="text" class="form-control" id="country" name="country" value="{{old('country')}}">
</div>

<div class="mb-3">
    <label for="city" class="form-label">City</label>
    <input type="text" class="form-control" id="city" name="city" value="{{old('city')}}">
</div>


<div class="mb-3">
    <label for="date" class="form-label">Date</label>
    <input class="form-control" id="date" name="date" type="date" value="{{old('date')}}">
</div>

<div class="mb-3">
  <label for="type" class="form-label">type</label>
  <input class="form-control" id="type" name="type" value="{{old('type')}}">
</div>

<button type="submit">invia</button>
</from>
@endsection