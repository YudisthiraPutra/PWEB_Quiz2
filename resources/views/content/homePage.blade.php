@extends('layout')
@section('uncommon_head')
<script src="{{ asset('js/homePage.js') }}"></script>
@stop

@section('content')
<div class="p-2">
    @if (session()->has('email'))
        <h3>Welcome back, {{ $userInformation->first_name }}!</h3>
    @else
        <h3>Welcome to our website!</h3>   
    @endif
    
    <div class="p-3 d-flex flex-wrap ">
        <div class="p-2 col-md-6 col-12">
            <div class="card h-100">
                <img src="{{ asset('images/pusat.jpg') }}" alt="" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">Abdul Coffee Kertajaya</h5>
                </div>
            </div>
        </div>
        
        <div class="p-2 col-md-6 col-12">
            <div class="card h-100">
                <img src="{{ asset('images/cabang.jpg') }}" alt="" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">Abdul Coffee Dharmahusada</h5>
                </div>
            </div>
        </div>
        
    </div>
    
    <p>Abdul Coffee, nestled in the vibrant neighborhoods of Dharmahusada and Kertajaya, Surabaya, is a haven for coffee enthusiasts. Our cozy coffee shop offers a diverse range of meticulously crafted brews and delectable snacks, creating the perfect setting for a memorable coffee experience in the heart of the city.
    </p>
    <hr>
    
    <h3>Dibuat Oleh</h3>
    <ul>
        <li>Abdullah Nasih 5025211111</li>
    </ul>
</div>
@stop