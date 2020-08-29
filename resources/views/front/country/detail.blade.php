@extends('front.layout.master')
@section('title','Countries Detatils')
@section('content')
<h2>Country Details</h2>
  <h3>{{$country->name}} Details</h3>
  <h3>{{$country->capital}}</h3>
@endsection