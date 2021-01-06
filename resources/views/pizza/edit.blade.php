@extends('layouts.app')

@section('title')
    <title>Phizza Hut Edit Pizza</title>
@endsection

@section('css')
{{-- Tempat taro url css (kalo mo sambungin blade ke css buatan kita sendiri--}}

@endsection


@section('content')
<div class="container">
    <div class="container mt-4 mb-4 col-12 d-inline-flex p-3 border">
  
        <div class="" style="width: 250px">
          <img src="{{ url('image/' . $pizza->image) }}" alt="pizzaImage" style="width: 100%; height: auto">
        </div>
        
        <form class="col" method="post" action="/pizza/edit/{{$pizza->id}}" enctype="multipart/form-data">
          @csrf
          <div class="col-md-6 ml-4">
            <h1>Edit Pizza Details</h1>
            <h5>Pizza Name:</h5>
            <input type="text" class="form-control" value="{{$pizza->name}}"  name="pizzaName" placeholder="Enter Name"><br>
            <h5>Pizza Price:</h5>
            <input type="number" class="form-control" value="{{$pizza->price}}" name="pizzaPrice" placeholder="Enter Price"><br>
            <h5>Pizza Description:</h5>
            <input type="text" class="form-control" value="{{$pizza->desc}}" name="pizzaDesc" placeholder="Enter Description"><br>
            <h5>Pizza Image:</h5>
            <input type="file" value="{{$pizza->image}}" class="form-control-file" name="image"><br>

            <div>
              <button type="submit" class="btn btn-danger">
                Edit Pizza
              </button>
            </div>
          </form>
@endsection