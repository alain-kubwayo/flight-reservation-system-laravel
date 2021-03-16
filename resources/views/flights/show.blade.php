@extends('layouts.app')
@section('content')
<!-- <div class="wrapper"> -->
    <div class="booking">
        <div class="booking-div">
            <h1>Flight booking for {{$flight->name_prefix}} {{$flight->name}} {{$flight->surname}}</h1>
            <p><strong>Airline: </strong>{{$flight->name_of_airline}}</p>
            <p><strong>Departing Country: </strong>{{$flight->country_of_departure}}</p>
            <p><strong>Destination Country: </strong>{{$flight->country_of_destination}}</p>
            <p><strong>Departure Date: </strong>{{$flight->date_of_departure}}</p>
            <p><strong>Return Date: </strong>{{$flight->date_of_return}}</p>
            <p><strong>Class: </strong>{{$flight->class}}</p>
            <p><strong>Mode of Payment: </strong>{{$flight->mode_of_payment}}</p>
            <p><strong>Promocode: </strong>{{$flight->promo_code}}</p>
        </div>
        <div>
        <form action="/flights/{{$flight->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="del-btn">Booking complete</button>
        </form>
        </div>
        <div class="booking-link">
            <a href="{{route('flights.index')}}">Go back to all bookings</a>
        </div> 
    </div>
<!-- </div> -->
@endsection


