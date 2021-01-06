@extends('layouts.app')

@section('title')
    <title>Phizza Hut View All User</title>
@endsection

@section('css')
{{-- Tempat taro url css (kalo mo sambungin blade ke css buatan kita sendiri--}}

@endsection


@section('content')
{{-- Taro Body HTML nya bisa disini (tapi gausah kasih tag body lagi ) --}}
<div class="container">
    <div class="row">
        @foreach ($user as $user)
        <div class="card" style="width: 18rem;">
            <div class="card-body bg-danger">
                <h5 class="card-title text-white">User Id: {{$user->role_id}}</h5>
            </div>
            <div class="card-body">
                
                <h5 class="card-name">Username: {{$user->name}}</h5>
                <h5 class="card-email">Email: {{$user->email}}</h5>
                <h5 class="card-address">Address: {{$user->address}}</h5>
                <h5 class="card-phone">Phone Number: {{$user->phone}}</h5>
                <h5 class="card-gender">Gender: {{$user->gender}}</h5>
            </div>
        </div>  
        @endforeach 
    </div>
</div>     
@endsection