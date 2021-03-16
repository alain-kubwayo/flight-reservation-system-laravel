@extends('layouts.app')
@section('content')
<!-- <div class="wrapper"> -->
    <div class="form-container">
    <h1>Fill the following form to book your flight</h1>
    <form action="/flights" method="POST">
        @csrf
        <label for="name-prefix">Prefix: </label>
        <select name="name-prefix" id="name-prefix">
            <option value="Mr.">Mr.</option>
            <option value="Mr.">Ms.</option>
            <option value="Mr.">Mrs.</option>
        </select>
        <label for="name">Given name(s): </label>
        <input type="text" name="name">
        <label for="name">Surname: </label>
        <input type="text" name="surname">
        <label for="name-of-airline">Airline name: </label>
        <select name="name-of-airline" name="name-of-airline">
            <option value="Rwandair">Rwandair</option>
            <option value="Ethiopian Airlines">Ethiopian Airlines</option>
            <option value="Qatar Airways">Qatar Airways</option>
            <option value="Etihad Airways">Etihad Airways</option>
            <option value="Ryanair">Ryanair</option>
        </select>
        <label for="country-of-departure">Country of departure: </label>
        <select name="country-of-departure" name="country-of-departure">
            <option value="Rwanda">Rwanda</option>
            <option value="Ethiopia">Ethiopia</option>
            <option value="United Arab Emirates">United Arab Emirates</option>
            <option value="Qatar">Qatar</option>
            <option value="Ghana">Ghana</option>
            <option value="Kenya">Kenya</option>
            <option value="France">France</option>
            <option value="Germany">Germany</option>
        </select>
        <label for="country-of-destination">Country of destination: </label>
        <select name="country-of-destination" name="country-of-destination">
            <option value="Rwanda">Rwanda</option>
            <option value="Ethiopia">Ethiopia</option>
            <option value="Nigeria">Nigeria</option>
            <option value="Qatar">Qatar</option>
            <option value="Burundi">Burundi</option>
            <option value="Austria">Austria</option>
            <option value="Luxembourg">Luxembourg</option>
            <option value="Germany">Germany</option>
        </select>
        <label for="date-of-departure">Date of departure: </label>
        <input type="date" name="date-of-departure">
        <label for="date-of-return">Date of return: </label>
        <input type="date" name="date-of-return">
        <label for="class">Class: </label>
        <select name="class" id="class">
            <option value="Economy">Economy</option>
            <option value="Premium Economy">Premium Economy</option>
            <option value="Business">Business</option>
            <option value="First Class">First Class</option>
        </select>
        <label for="promo-code">Promocode: </label>
        <input type="text" name="promo-code">
        <label for="mode-of-payment">Mode of payment: </label>
        <select name="mode-of-payment" name="mode-of-payment">
            <option value="Cash">Cash</option>
            <option value="Visa Card">Visa card</option>
            <option value="MasterCard">MasterCard</option>
        </select>
        <input type="submit" value="Book">
    </form>
    </div>
<!-- </div> -->
@endsection


