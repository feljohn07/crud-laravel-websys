@extends('layout.layout')
@section('content')

  {{-- View Appointment Details --}}
  <div class="col-md-auto mx-auto card mt-5 justify-content-around" style="max-width: 500px;">
    <div class="card-header">Client Appointment Details</div>
      <div class="card-body">

          <div class="card-body">
              {{-- Client Full --}}
              <p class="card-text"><b>Fullname:</b> {{ $appointments->firstname }} {{ $appointments->lastname }}</p>
              <hr>
              {{-- Client Details --}}
              <p class="card-text"><b>Date & time:</b> {{ $appointments->date }} {{ date('h:i A', strtotime($appointments->time)); }}</p>
              <p class="card-text"><b>Contact:</b> {{ $appointments->contact }}</p>
              <p class="card-text"><b>Symptoms:</b> {{ $appointments->symptoms }}</p>
          </div>
          
          <hr>
          {{-- Back Button --}}
          <a class="btn btn-secondary btn-sm" href="{{url('/appointment')}}">BACK</a>
      </div>
  </div>
 
@stop