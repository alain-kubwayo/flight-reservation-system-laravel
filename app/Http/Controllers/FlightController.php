<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Flight;

class FlightController extends Controller
{
    public function index(){
        $flights = Flight::all();
        return view('flights.index', ['flights'=>$flights]);
    }

    public function show($id){
        $flight = Flight::findOrFail($id);
        return view('flights.show', ['flight'=>$flight]);
    }

    public function create(){
        return view('flights.create');
    }

    public function store(Request $request){
        $request->validate(
            [
                'name'=>['required'],
                'surname'=>['required'],
                'date-of-departure'=>['required'],
                'date-of-return'=>['required'],
                'promo-code'=>['required']
            ]
        );
        $flight = new Flight();
        $flight->name_prefix = request('name-prefix');
        $flight->name = request('name');
        $flight->surname = request('surname');
        $flight->name_of_airline = request('name-of-airline');
        $flight->country_of_departure = request('country-of-departure');
        $flight->country_of_destination = request('country-of-destination');
        $flight->date_of_departure = request('date-of-departure');
        $flight->date_of_return = request('date-of-return');
        $flight->class = request('class');
        $flight->promo_code = request('promo-code');
        $flight->mode_of_payment = request('mode-of-payment');

        $flight->save();

        return redirect('/')->with('msg', 'Your booking has been confirmed!');
    }

    public function destroy($id){
        $flight = Flight::findOrFail($id);
        $flight->delete();
        return redirect('/flights');
    }
}
