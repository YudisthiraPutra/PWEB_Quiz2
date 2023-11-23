@extends('layout')
@section('uncommon_head')
<script src="{{ asset('js/profilePage.js') }}"></script>
@stop

@section('content')
<div class="d-flex flex-wrap  p-3">
    <h1 class="col-12 text-center">PROFILE</h1>
    <div class="col-12 justify-content-center d-flex">
        <div class="card border-1" style="width:18rem; box-shadow: 2px 2px;">
            <img src="https://images.unsplash.com/photo-1561154464-82e9adf32764?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $userInformation->first_name.' '. $userInformation->last_name}}</h5>
                <h6 class="card-subtitle mb-2 text-muted ">Member since: {{ $userInformation->created_at }}</h6>
                <p class="card-text">
                    <ul>
                        <li>Email: {{ session('email') }}</li>
                        <li>Phone Number: {{ $userInformation->phone }}</li>
                        <li>Address: {{ $userInformation->address }}</li>
                    </ul>
                </p>
            </div>
            <div class="card-footer">
                <div class="p-2">
                    <button class="form-control" id="editProfile">Edit Profile</button>
                </div>
                <div class="p-2">
                    <button class="form-controltext-white" style="background-color: #776b5d; width: 100%; color: white; padding: 5px 0; border-radius: 5px;" id="pamit">Log Out</button>
                </div>
                                <div class="p-2">
                    <button class="form-controltext-white" style="background-color: red; width: 100%; color: white; padding: 5px 0; border-radius: 5px;" id="deleteAccount">Delete Account</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var token = "{{ csrf_token() }}"
</script>
@stop