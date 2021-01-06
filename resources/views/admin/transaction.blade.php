@extends('layouts.app')

@section('title')
    <title>Phizza Hut View All User Transaction</title>
@endsection

@section('css')
{{-- Tempat taro url css (kalo mo sambungin blade ke css buatan kita sendiri--}}

@endsection


@section('content')
{{-- Taro Body HTML nya bisa disini (tapi gausah kasih tag body lagi ) --}}
<div class="container">
    @php
        $transaction_count = 0;
    @endphp
    <div class="column">
        @foreach ($transactions as $transaction)
        
        @php
            $transaction_count++;
        @endphp

        @if ($transaction_count % 2 == 1)
        <div class="card bg-danger" style="width: 70rem;">
            <div class="card-body">
                <h5 class="card-name">Transaction at: {{$transaction->created_at}}</h5>
                <h5 class="card-email">User ID: {{$transaction->user_id}}</h5>
                <h5 class="card-address">Username: {{$transaction->name}}</h5>
            </div>
        </div>  
        @else
        <div class="card bg-light" style="width: 70rem;">
            <div class="card-body">
                <h5 class="card-name">Transaction at: {{$transaction->created_at}}</h5>
                <h5 class="card-email">User ID: {{$transaction->user_id}}</h5>
                <h5 class="card-address">Username: {{$transaction->name}}</h5>
            </div>
        </div> 
        @endif  
        @endforeach 
    </div>
</div>
@endsection