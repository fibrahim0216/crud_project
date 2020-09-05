@extends('front.layout.master')
@section('title','Country Details')
@section('content')
<h2>Country Details</h2>
<table class="table table-bordered">
  <h2>{{$country->name}}</h2>
  <h3>{{$country->capital}}</h3>
  <thead>
    <tr class="text-center">
      <th scope="col">No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
    </tr>
  </thead>
  <tbody>
    @foreach($country->persons as $person)
    <tr class="text-center">
      <td>{{$person->id}}</td>
      <td>{{$person->name}}</td>
      <td>{{$person->email}}</td>
      <td>{{$person->phone}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection