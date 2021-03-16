@extends('layouts.app')
@section('content')
<div class="wrapper">
    <h1>All flight bookings</h1>
    <div>
        <table>
            <thead>
                <tr>
                    <th>Airline</th>
                    <th>Departure</th>
                    <th>Destination</th>
                    <th>Departing</th>
                    <th>Returning</th>
                    <th>Class</th>
                    <th>Payment</th>
                    <th>Promocode</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($flights as $flight)
                    <tr>  
                        <td>{{$flight->name_of_airline}}</td>
                        <td>{{$flight->country_of_departure}}</td>
                        <td>{{$flight->country_of_destination}}</td>
                        <td>{{$flight->date_of_departure}}</td>
                        <td>{{$flight->date_of_return}}</td>
                        <td>{{$flight->class}}</td>
                        <td>{{$flight->mode_of_payment}}</td>
                        <td>{{$flight->promo_code}}</td>
                        <td>
                            <a class="flight-link" href="{{route('flights.show', $flight->id)}}">View</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
