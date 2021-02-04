@extends('layouts.main')

@section('content')
<div class="app">
    <nav>
    <a href="{{route('bookings.index')}}">Back to list</a>
    <a href="{{route('bookings.create')}}" aria-current="page">Create new booking</a>
  </nav>
  <main>
    <form method="POST" action={{route('bookings.update', $booking->id)}}>
        @csrf
        @method('PUT')
        <h2 class='title-create'>New Booking</h2>
        <div class="formcontainer">
        <hr/>
        <div class="container">
            <div>
                <label for="guest_full_name"><strong>Full Name</strong></label>
                <input type="text" placeholder="Enter Fullname" name="guest_full_name" required value="{{ $booking->guest_full_name }}">
                @error('guest_full_name')
                {{$message}}
                @enderror
            </div>
            <div>
                <label for="guest_credit_card"><strong>Num Credit Card</strong></label>
                <input type="text" placeholder="Enter num Credit Card" name="guest_credit_card" required value="{{ $booking->guest_credit_card }}">
                @error('guest_credit_card')
                {{$message}}
                @enderror
            </div>
            <div>
                <label for="room"><strong>Room</strong></label>
                <input type="text" placeholder="Enter Room" name="room" required value="{{ $booking->room }}">
                @error('room')
                {{$message}}
                @enderror
            </div>
            <label for="from_date"><strong>Start date:</strong></label>
            <input
                type="date"
                id="fromdate"
                name="from_date"
                value="{{ $booking->from_date }}"
                min="2018-01-01"
                max="2100-12-31">
            @error('fromdate')
            {{$message}}
            @enderror
            <label for="to_date"><strong>To date:</strong></label>
            <input
                type="date"
                id="todate"
                name="to_date"
                value="{{ $booking->to_date }}"
                min="2018-01-01"
                max="2100-12-31">
            <div>
            @error('to_date')
            {{$message}}
            @enderror
                <label for="more_details"><strong>More Details</strong></label>
            </div>
            <textarea id="w3review" name="more_details" rows="4" cols="50">{{ $booking->more_details }}</textarea>
            @error('more_details')
            {{$message}}
            @enderror
        </div>
        <button type="submit">Create</button>
    </form>
  </main>
</div>

@endsection
