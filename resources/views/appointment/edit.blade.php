@extends('layout.layout')
@section('content')
 
<div class="mx-auto card mt-5 justify-content-around" style="max-width: 500px;">

    <div class="card-header">Edit Appointment Details</div>
    {{-- Form - Edit Appointment Details --}}
    <div class="card-body">
        
        <form action="{{ url('appointment/' .$appointments->id) }}" method="post">
            {!! csrf_field() !!}
            {{-- Use PATCH METHOD TO UPDATE --}}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{ $appointments->id }}" id="id" />
            <label>Firstname</label></br>
            <input type="text" name="firstname" id="firstname" value="{{ $appointments->firstname }}" class="form-control"></br>
            <label>Lastname</label></br>
            <input type="text" name="lastname" id="lastname" value="{{ $appointments->lastname }}" class="form-control"></br>
            <label>Contact</label></br>
            <input type="text" name="contact" id="contact" value="{{ $appointments->contact }}" class="form-control"></br>
            <label>Date</label></br>
            <input type="text" name="date" id="date" value="{{ $appointments->date }}" class="form-control"></br>
            <label>Time</label></br>
            <input type="time" name="time" id="time" value="{{ $appointments->time }}" class="form-control"></br>
            <label>Symptoms</label></br>
            <input type="text" name="symptoms" id="symptoms" value="{{ $appointments->symptoms }}" class="form-control"></br>

            {{-- Update Button --}}
            <input type="submit" value="Update" class="btn btn-success btn-sm">
            {{-- Back Button --}}
            <a class="btn btn-secondary btn-sm" href="{{ url('/appointment') }}">BACK</a>
        </form>
    </div>
</div>
 
@stop