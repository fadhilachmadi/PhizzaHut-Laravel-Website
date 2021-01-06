@extends('layouts.app')

@section('title')
    <title>Transaction Detail</title>
@endsection

@section('content')


<div class="container">

  @foreach ($transaction_details as $transaction_detail)

  @php
      $total = 0;
      $total = $transaction_detail->pizzas->price * $transaction_detail->qty;
  @endphp
  
  <div class="mt-4 mb-4 col-12 d-inline-flex p-3 border">
    <div class="row">
      <div class="col-sm-4" style="width: 350px">
        <img src="{{ url('image/' . $transaction_detail->pizzas->image) }}" alt="" style="width: 100%; height: auto">
      </div>
      <div class="col-sm-8">
        <h4>{{$transaction_detail->pizzas->name}}</h4>
        <p>Rp {{number_format($transaction_detail->pizzas->price)}}</p>
        <p>Quantity : {{$transaction_detail->qty}}</p>

        
        <p>Total : Rp {{number_format($total)}}</p>
        
       
      </div>
    </div>
  </div>
      
  @endforeach
  

</div>
    
@endsection