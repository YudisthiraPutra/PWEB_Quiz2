@extends('layout') @section('uncommon_head') @stop @section('content')
<div class="p-2 d-flex flex-wrap">
  <h1 class="text-center col-12" style="letter-spacing: 1px">OUR FOODS</h1>
  <hr class="col-12" />
  @foreach ($menu as $m)
  <div class="col-12 col-sm-4 col-lg-3 p-2">
    <div class="card border-1 h-100" style="box-shadow: 2px 2px">
      <img
        src="{{ asset('images/'.$m['pic_file']) }}"
        alt="Your Image"
        style="max-height: 350px; object-fit: cover; border-radius: 10px"
      />
      <div class="card-body">
        <h5 class="card-title">{{ $m["name"] }}</h5>
        <h6 class="card-subtitle mb-2 text-muted">Rp {{ $m["price"] }}</h6>
      </div>
    </div>
  </div>
  @endforeach
  <h6 class="text-muted text-center col-12 p-5">
    Our Upcoming Menu(s) will be updated!
  </h6>
</div>
@stop
