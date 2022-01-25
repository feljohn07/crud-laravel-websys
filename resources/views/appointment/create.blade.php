@extends('layout.layout')
@section('content')
 
<div class="mx-auto card mt-5 justify-content-around" style="width: 500px;">

  <div class="card-header">Add New Appointment</div>

  <div class="card-body">
      <form action="{{ url('appointment') }}" method="post">

          {!! csrf_field() !!}
          <label>Firstname</label></br>
          <input type="text" name="firstname" id="firstname" class="form-control"></br>
          <label>Lastname</label></br>
          <input type="text" name="lastname" id="lastname" class="form-control"></br>
          <label>Contact Info</label></br>
          <input type="text" name="contact" id="contact" class="form-control"></br>
          <label>Date</label></br>
          <input type="date" name="date" id="date" class="form-control"></br>
          <label>Time</label></br>
          <input type="time" name="time" id="time" class="form-control"></br>
          <label>Symptoms</label></br>
          <input type="text" name="symptoms" id="symptoms" class="form-control"></br>

          <input type="submit" value="Save" class="btn btn-success btn-sm">
          <a class="btn btn-secondary btn-sm" href="{{url('/appointment')}}">BACK</a>

      </form>
   
  </div>

</div>
 
@stop