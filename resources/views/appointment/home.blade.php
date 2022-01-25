@extends('layout.layout')
@section('content')

<div style="text-align: center;">

    <h1 class="mt-5 pt-5" >Web System Final Project</h1>
    <h1 class="mt-3 pt-2" >Laravel App with CRUD Functionality</h1>
    <a href="{{ url('/appointment/create') }}" class="btn btn-success btn-sm mx-auto justify-content-around mt-3" title="New Row">Add New Appointment</a><br>
    <a href="{{ url('/appointment') }}" class="btn btn-primary btn-sm mx-auto justify-content-around mt-3" title="New Row">View Appointments</a><br>
    <a href="{{ url('/members') }}" class="btn btn-outline-secondary btn-sm mx-auto justify-content-around mt-3" title="New Row">View Members</a>
</div>


@endsection