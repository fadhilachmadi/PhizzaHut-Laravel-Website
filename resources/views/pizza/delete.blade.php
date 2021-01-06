@extends('layouts.app')

@section('title')
    <title></title>
@endsection

@section('css')
{{-- Tempat taro url css (kalo mo sambungin blade ke css buatan kita sendiri--}}

@endsection


@section('content')
    <div class="container">
        <div class="container mt-4 mb-4 col-12 d-inline-flex p-3 border">
  
           <div class="" style="width: 250px">
           <img src="{{ url('image/' . $pizza->image) }}" alt="Pizza" style="width: 100%; height: auto">
           </div>

           <div class="col-md-6 ml-4">
            <h1>{{$pizza->name}}</h1><br>
            <h5>{{$pizza->desc}}</h5><br>
            <h5>{{$pizza->price}}</h5><br>

            <div>
            <form action="/delete/{{$pizza->id}}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">
                    {{ __('Delete Pizza') }}
                </button>
                </form>
            </div>
@endsection