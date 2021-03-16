@extends('layouts.layout')

@section('content')
<div class="welcome flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="title">
            Safe Travels
        </div>
        <div class="subtitle">
            <p>Book your next flight with us!</p>
        </div>
        <?php
            if(session('msg') !== null){ 
        ?>
                <p class="msg">{{session('msg')}}</p>
        <?php   
            }
        ?>
        <div class="welcome-cta">
            <a href="{{route('flights.create')}}">Book here-></a>
        </div>
    </div>
</div>
@endsection
    
