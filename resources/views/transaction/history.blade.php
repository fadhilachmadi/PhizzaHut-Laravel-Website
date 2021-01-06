@extends('layouts.app')

@section('title')
    <title>Phizza Hut Transaction History</title>
@endsection

@section('content')

<div class="container">
  @php
      $transaction_count = 0;
  @endphp

  @foreach ($transactions as $transaction)

    @php
      $transaction_count++; 
    @endphp

  <form  class="col"  action="/transaction/detail/{{$transaction->id}}">
  
    <button type="submit" class="btn  btn-block m-4 {{$transaction_count % 2 != 0 ? 'btn-danger' : 'btn-light border'}}" style="text-align: left">
      Transaction at {{$transaction->created_at}}
    </button>

 </form>


  @endforeach

</div>
    
@endsection