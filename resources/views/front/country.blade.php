@extends('front.layout.master')
@section('title','Countries List')
@section('content')
<h2>Country List</h2>
<table class="table table-bordered">
  <div class="text-right">
    <a href="" class="btn btn-success text-right">Create</a>
  </div>
  <thead>
    <tr class="text-center">
      <th scope="col">No</th>
      <th scope="col">Country</th>
      <th scope="col">Capital</th>
      <th scope="col">Currence</th>
      <th scope="col">Population</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($countries as $country)
    <tr class="text-center">
      <td>{{$country->id}}</td>
      <td>{{$country->name}}</td>
      <td>{{$country->capital}}</td>
      <td>{{$country->currence}}</td>
      <td>{{$country->population}}</td>
      <td class="text-center"><a href="" class="btn btn-primary">Edit</a> || <a href="" class="btn btn-danger">Delete</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection