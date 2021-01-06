@extends('layouts.app')

@section('title')
    <title>Phizza Hut Cart</title>
@endsection

@section('content')

<div class="container">

  @if ($carts->count() == 0)
   <h1 class="text-center">Cart is Empty</h1>
    
  
  @else
    @foreach ($carts as $cart)
  
  <div class="mt-4 mb-4 col-12 d-inline-flex p-3 border">
    <div class="row">
      <div class="col-sm-4" style="width: 250px">
        <img src="{{ url('image/' . $cart->pizzas->image) }}" alt="" style="width: 100%; height: auto">
      </div>
      <div class="col-sm-8">
        <h4>{{$cart->pizzas->name}}</h4>
        <p>Rp {{number_format($cart->pizzas->price)}}</p>
        <p>Quantity : {{$cart->qty}}</p>

        <form  class="col"  method="POST"  action="/cart/update/{{$cart->id}}">
          @csrf
          @method('PATCH')
          <div class="form-group row mt-4 mb-4 ">
              <label for="qty" class="col-form-label text-md-right">{{ __('Quantity') }}</label>
  
              <div class="col-md-6">
                 
                  <input id="qty" type="number" class="form-control"  name="qty" value="{{$cart->qty}}">
              </div>
          </div>
        
          <div class="form-group row mt-4 mb-4">
              <div class="">
                  <button type="submit" class="btn btn-primary">
                    Update Quantity
                  </button>
              </div>
          </div>
       </form>

       <form  class="col"  method="POST" action="/cart/delete/{{$cart->id}}">
        @csrf
        @method('DELETE')
      
        <div class="form-group row mt-4 mb-4">
            <div class="">
                <button type="submit" class="btn btn-danger">
                    Delete From Cart
                </button>
            </div>
        </div>
     </form>

       
      </div>
    </div>
  </div>
      
  @endforeach
  
  <div style="text-align: center">
    <form  class="col"  method="POST" action="/checkout">
      @csrf
    
      <div class="form-group row mt-4 mb-4">
          <div class="col-md-6 offset-md-4">
              <button type="submit" class="btn btn-secondary " {{$carts->count() == 0 ? 'disabled' : ''}}>
                  Checkout
              </button>
          </div>
      </div>
   </form>
  </div>
  
      
  @endif
  


</div>
    
@endsection






