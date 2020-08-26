@extends('front.layout.master')
@section('title','Countries List')
@section('content')
<h2>Country List</h2>
<form action="" method="post">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Country</label>
    <input type="text" name="name" class="form-control">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Capital</label>
    <input type="text" name="capital" class="form-control">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Currence</label>
    <input type="text" name="currence" class="form-control">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Population</label>
    <input type="text" name="population" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">Create</button>
</form>
@endsection