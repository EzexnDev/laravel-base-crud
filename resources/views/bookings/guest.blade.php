@extends('layouts.main')
@section('content')
    <p>ID:{{$guest->id}}</p>
    <p>Guest Full Name: {{$guest->guest_full_name}}</p>
    <p>More Details: {{$guest->more_details}}</p>
@endsection
