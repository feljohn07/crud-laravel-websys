@extends('layout.layout')
@section('content')
 
  <div class="mx-auto card mt-5 justify-content-around" style="max-width: 500px;">

    <div class="card-header">Add New Appointment</div>

    <div class="card-body">
        {{-- Form - Create New Appointment --}}
        <form action="{{ url('appointment') }}" method="post">
            {!! csrf_field() !!}

            {{-- Inputs --}}
            <label>Firstname</label></br>
            <input type="text" name="firstname" id="firstname" class="form-control" required></br>
            <label>Lastname</label></br>
            <input type="text" name="lastname" id="lastname" class="form-control" required></br>
            <label>Contact Info</label></br>
            <input type="text" name="contact" id="contact" class="form-control" required></br>
            <label>Date</label></br>
            <input type="date" name="date" id="date" class="form-control" required></br>
            <label>Time</label></br>
            <input type="time" name="time" id="time" class="form-control" required></br>
            <label>Symptoms</label></br>
            <input type="text" name="symptoms" id="symptoms" class="form-control"required></br>

            {{-- Button Save --}}
            <input type="submit" value="Save" class="btn btn-success btn-sm">
            {{-- Button to go back to Appointment Page --}}
            <a class="btn btn-secondary btn-sm" href="{{url('/appointment')}}">BACK</a>

        </form>
    
    </div>
  </div>
 
@stop