@extends('front.layout.master')
@section('title','Person List')
@section('content')
<h2>Person List</h2>
<table class="table table-bordered">
  <div class="text-right">
    <a href="{{route('create')}}" class="btn btn-success text-right">Create</a>
  </div>
  <thead>
    <tr class="text-center">
      <th scope="col">No</th>
      <th scope="col">Country</th>
      <th scope="col">Capital</th>
      <th scope="col">Currence</th>
      <th scope="col">Population</th>
      <th scope="col">Created</th>
      <th scope="col">Update</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($persons as $person)
    <tr class="text-center">
      <td>{{$person->id}}</td>
      <td>{{$country->name}}</td>
      <td>{{$person->name}}</td>
      <td>{{$person->phone}}</td>
      <td>{{$person->country}}</td>
      <td>{{$country->created_at->diffForHumans()}}</td>
      <td>{{$country->updated_at->format('d M-Y')}}</td>
      <td class="text-center"><a href="" class="btn btn-primary">Edit</a> || 
          <a href="" class="btn btn-danger">Delete</a>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
