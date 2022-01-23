@extends('layout.layout')
@section('content')

  <div class="mx-auto card mt-5 justify-content-around" style="width: 500px;">
    <div class="card-header">Client Appointment Details</div>
      <div class="card-body">

          <div class="card-body">
              <p class="card-text">Fullname: {{ $contacts->name }} {{ $contacts->address }}</p>
              <p class="card-text">Date & time : {{ $contacts->mobile }}</p>
              <p class="card-text">Contact : {{ $contacts->mobile }}</p>
              <p class="card-text">Purpose: {{ $contacts->mobile }}</p>
          </div>
          <hr>

          <a class="btn btn-secondary btn-sm" href="{{url('/contact')}}">BACK</a>
      
      </div>
  </div>
 
@stop