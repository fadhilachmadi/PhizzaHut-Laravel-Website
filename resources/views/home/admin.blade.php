@extends('layouts.app')

@section('title')
    <title>Phizza Admin</title>
@endsection


@section('content')
<div class="container">

    <div  class="col-12"  >

      <h1 class="mt-4 mb-4">Our freshly made pizza!</h1>
      <h5 class="text-secondary mt-4 mb-4">Our freshly made pizza!</h5>

      <div class="col-12 row">
        <p id="category-label" class="text-center mt-2">Search Pizza</p>
        <form action="/" class="form-inline ml-5">
          <input type="text" class="form-control span-12" name="search">
          <button class="btn btn-primary">Search</button>
        </form>
      </div>

      <div class="col-12 row">
        <a href="/add_pizza">
          <button class="btn btn-danger">Add Pizza</button>
        </a>
      </div>


      <div class="row">

        
        @foreach ($pizzas as $pizza)

        
          <div class="card" style="width: 250px; margin: 20px">

            <a href="/member/pizza/{{$pizza->id}}" class="">
            <img class="card-img-top" 
            src="{{ url('image/' . $pizza->image) }}" 
            alt="Card image" 
            style="width:100%; height: 160px;">
          </a>

          <div class="card-body" style="padding: 15px">
            
            <h4 class="card-title">
              {{ $pizza->name }}
            </h4>
              <p class="card-text">
                Rp {{ number_format($pizza->price)}}
              </p>

              <div>
              <a href="/edit_pizza/{{$pizza->id}}">
                <button type="submit" class="btn btn-primary">
                    {{ __('Update Pizza') }}
                </button>
              </a>

              <a href="/delete_pizza/{{$pizza->id}}">
                <button type="submit" class="btn btn-danger">
                    {{ __('Delete Pizza') }}
                </button>
              </a>
            </div>

            
          </div>
        </div> 
        
  
      @endforeach

      </div>
      {{$pizzas->links()}}
      
    </div>
   
</div>
@endsection

