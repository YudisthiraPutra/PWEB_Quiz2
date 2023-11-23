@extends('layout') @section('uncommon_head')
<script src="{{ asset('js/homePage.js') }}"></script>
@stop @section('content')
<div class="p-2">
  @if (session()->has('email'))
  <h3
    style="
      text-align: center;
      margin: 20px;
      font-size: 2.3rem;
      font-weight: 900;
    "
  >
    Welcome back, {{ $userInformation->first_name }}!
  </h3>
  @else
  <h3
    style="
      text-align: center;
      margin: 20px;
      font-size: 2.3rem;
      font-weight: 900;
    "
  >
    Welcome to Livin' Coffee!
  </h3>
  @endif

  <div style="height: 800px; display: flex; justify-content: space-around">
    <div
      style="
        width: 50%;
        display: flex;
        justify-content: center;
        flex-direction: column;
      "
    >
      <h1 style="width: 40%; margin: auto">
        Brewing Joy, Savoring Moments:
        <span style="text-decoration: underline">Livin' Coffee</span>, Where
        Every Cup Tells a Story.
      </h1>
    </div>
    <div style="width: 50%">
      <img
        src="{{ asset('images/Livinlogo.png') }}"
        alt=""
        style="height: 70%; rotate: 20deg; margin: 120px 0 0 70px"
      />
    </div>
  </div>

  <h1
    style="
      text-align: center;
      font-weight: bold;
      font-size: 4rem;
      text-decoration: underline;
    "
  >
    Location
  </h1>
  <p style="width: 60%; margin: 0 auto; text-align: justify">
      Coffee, nestled in the vibrant neighborhoods of Dharmahusada and
    Kertajaya, Surabaya, is a haven for coffee enthusiasts. Our cozy coffee shop
    offers a diverse range of meticulously crafted brews and delectable snacks,
    creating the perfect setting for a memorable coffee experience in the heart
    of the city.
  </p>

  <div
    style="
      height: 700px;
      width: 40%;
      margin: 30px auto;
      display: flex;
      justify-content: space-between;
    "
  >
    <div
      style="
        margin: 10px 0 0 0;
        transition: transform 0.3s ease-in-out; /* Added transition property for smooth scaling */
      "
      onmouseover="this.style.transform='scale(1.1)'"
      onmouseout="this.style.transform='scale(1)'"
    >
      <img
        src="{{ asset('images/pusat.jpg') }}"
        alt=""
        style="width: 300px; border-radius: 20px; box-shadow: 5px 5px"
      />
      <p style="margin: 10px 0 0 0; text-align: center; font-weight: bold">
        Livin' Coffee Kertajaya
      </p>
    </div>
    <div
      style="
        margin: 10px 0 0 0;
        transition: transform 0.3s ease-in-out; /* Added transition property for smooth scaling */
      "
      onmouseover="this.style.transform='scale(1.1)'"
      onmouseout="this.style.transform='scale(1)'"
    >
      <img
        src="{{ asset('images/cabang.jpg') }}"
        alt=""
        style="width: 300px; border-radius: 20px; box-shadow: 5px 5px"
      />
      <p style="margin: 10px 0 0 0; text-align: center; font-weight: bold">
        Livin' Coffee Dharmahusada
      </p>
    </div>
  </div>
</div>
@stop
