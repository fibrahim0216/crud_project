@extends('front.layout.master')
@section('title','Countries List')
@section('content')
<h2>Country Edit</h2>
<form action="" method="post">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Country</label>
    <input type="text" name="name" class="form-control" value="{{$country->name}}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Capital</label>
    <input type="text" name="capital" class="form-control" value="{{$country->capital}}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Currence</label>
    <input type="text" name="currence" class="form-control" value="{{$country->currence}}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Population</label>
    <input type="text" name="population" class="form-control" value="{{$country->population}}">
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection