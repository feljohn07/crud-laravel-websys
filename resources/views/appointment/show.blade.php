@extends('layout.layout')
@section('content')

  <div class="mx-auto card mt-5 justify-content-around" style="width: 500px;">
    <div class="card-header">Client Appointment Details</div>
      <div class="card-body">

          <div class="card-body">
              <p class="card-text"><b>Fullname:</b> {{ $appointments->firstname }} {{ $appointments->lastname }}</p>
              <hr>
              <p class="card-text"><b>Date & time:</b> {{ $appointments->date }} {{ date('h:i A', strtotime($appointments->time)); }}</p>
              <p class="card-text"><b>Contact:</b> {{ $appointments->contact }}</p>
              <p class="card-text"><b>Symptoms:</b> {{ $appointments->symptoms }}</p>
          </div>
          <hr>

          <a class="btn btn-secondary btn-sm" href="{{url('/appointment')}}">BACK</a>
      
      </div>
  </div>
 
@stop