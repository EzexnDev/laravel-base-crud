@extends('layouts.main')
@section('content')

<form method="POST" action={{route('bookings.store')}}>
    @csrf
    <h2 class='title-create'>New Booking</h2>
    <div class="formcontainer">
    <hr/>
    <div class="container">
        <div>
            <label for="fullname"><strong>Full Name</strong></label>
            <input type="text" placeholder="Enter Fullname" name="fullname" required>
        </div>
        <div>
            <label for="creditcard"><strong>Num Credit Card</strong></label>
            <input type="text" placeholder="Enter num Credit Card" name="creditcard" required>
        </div>
        <div>
            <label for="room"><strong>Room</strong></label>
            <input type="text" placeholder="Enter Room" name="room" required>
        </div>
        <label for="fromdate"><strong>Start date:</strong></label>
        <input
            type="date"
            id="fromdate"
            name="fromdate"
            value="{{ date('d-m-Y') }}"
            min="2018-01-01"
            max="2100-12-31">
        <label for="todate"><strong>To date:</strong></label>
        <input
            type="date"
            id="todate"
            name="todate"
            value="{{ date('d-m-Y') }}"
            min="2018-01-01"
            max="2100-12-31">
        <div>
            <label for="moredetails"><strong>More Details</strong></label>
        </div>
        <textarea id="w3review" name="moredetails" rows="4" cols="50">
        </textarea>
    </div>
    <button type="submit">Create</button>
</form>



@endsection;
