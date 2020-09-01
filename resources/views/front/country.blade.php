@extends('front.layout.master')
@section('title','Countries List')
@section('content')
<h2>Country List</h2>
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
    @foreach($countries as $country)
    <tr class="text-center">
      <td>{{$country->id}}</td>
      <td><a href="countries/{{$country->id}}"> {{$country->name}}</a></td>
      <td>{{$country->capital}}</td>
      <td>{{$country->currence}}</td>
      <td>{{$country->population}}</td>
      <td>{{$country->created_at->diffForHumans()}}</td>
      <td>{{$country->updated_at->format('d M-Y')}}</td>
      <td class="text-center"><a href="countries/{{$country->id}}/edit" class="btn btn-primary">Edit</a> || 
          <a href="countries/{{$country->id}}/delete" class="btn btn-danger">Delete</a>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection

     {{-- delete best option
       <form action="" method="post">
          @csrf
          @method('delete')
          <a href="countries/{{$country->id}}/delete" class="btn btn-sm btn-danger">Delete</a>
        </form>
        --}}