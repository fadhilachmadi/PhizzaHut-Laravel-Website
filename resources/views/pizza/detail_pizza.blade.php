@extends('layouts.app')

@section('title')
    <title>{{$pizza->name}}</title>
@endsection

@section('content')

<div class="container">
  <div class="container mt-4 mb-4 col-12 d-inline-flex p-3 border">

      <div class="" style="width: 250px">
        <img src="{{ url('image/' . $pizza->image) }}" alt="" style="width: 100%; height: auto">
      </div>
      
      <div class="col-md-6 ml-4">
        <h1>{{$pizza->name}}</h1>
        <p>{{$pizza->desc}}</p>
        <p>Rp {{number_format($pizza->price)}}</p>

        <form  class="col"  method="POST" action="/cart/add">
          @csrf

          <div class="form-group row">

                <input type="hidden" value="{{$pizza->id}}" name="pizza_id">

        </div>



           
        <ul class="navbar-nav ml-auto">
            
            @guest

                @if (Route::has('register'))
                <div class="form-group row"> </div>
        
                <div class="form-group row mb-0"> </div>


            
                @endif

            @else

              @if (Auth::user()->role_id == 2)
                <div class="form-group row">
                    <label for="qty" class="col-form-label text-md-right">{{ __('Quantity') }}</label>
        
                    <div class="col-sm-8">
                        <input id="qty" type="number" class="form-control"  name="qty" value="{{ 1 }}">
                    </div>
                </div>
        
                <div class="form-group row mb-0">
                    <div>
                        <button type="submit" class="btn btn-primary">
                            {{ __('Add to Cart') }}
                        </button>
                    </div>
                 </div>
                  
                @else
                    <div class="form-group row"> </div>
            
                    <div class="form-group row mb-0"> </div>
              @endif
            

            @endguest
            
        </ul> 











        
        

      </form>
        
       
      </div>

  </div>
</div>
    
@endsection



