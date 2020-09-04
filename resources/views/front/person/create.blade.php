@extends('front.layout.master')
@section('title','Person Create')
@section('content')
<h2>Person Create</h2>
<form action="" method="post">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name" class="form-control">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" name="email" class="form-control">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Phone</label>
    <input type="number" name="phone" class="form-control">
  </div>
  <div class="form-group">
    <label for="">Country_id</label>
    <select name="country_id" class="form-control">
      <option value="">Select Your Country</option>
      @foreach ($countries as $country)
        <option value="{{$country->id}}">{{$country->name}}</option>
      @endforeach
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Create</button>
</form>
@endsection