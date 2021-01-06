@extends('layouts.app')

@section('title')
    <title>Phizza Hut Add Pizza</title>
@endsection

@section('css')
{{-- Tempat taro url css (kalo mo sambungin blade ke css buatan kita sendiri--}}

@endsection


@section('content')
    <div class="container">
        <div class="container mt-4 mb-4 col-12 p-3 border">

            <form action="/pizza/add" class="col" method="post" enctype="multipart/form-data">
                @csrf

                <h1 class="mt-4 mb-4">Add New Pizza</h1>
                <h5>Pizza Name:</h5>
                <input type="text" class="form-control" id="pizzaName" name="pizzaName" placeholder="Enter Name"><br>
                <h5>Pizza Price:</h5>
                <input type="number" class="form-control" id="pizzaPrice" name="pizzaPrice" placeholder="Enter Price"><br>
                <h5>Pizza Description:</h5>
                <input type="text" class="form-control" id="pizzaDesc" name="pizzaDesc"  placeholder="Enter Description"><br>
                <h5>Pizza Image:</h5>
                <input type="file" name="image"><br>

                <div>
                    <button type="submit" class="btn btn-danger">
                        {{ __('Add Pizza') }}
                    </button>
                </div>
            </form>
            
        </div>
    </div>
@endsection