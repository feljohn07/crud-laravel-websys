@extends('layout.layout')
@section('content')
 
<div class="mx-auto card mt-5 justify-content-around" style="width: 500px;">

  <div class="card-header">Contactus Page</div>

  <div class="card-body">
      <form action="{{ url('contact') }}" method="post">

          {!! csrf_field() !!}
          <label>Firstname</label></br>
          <input type="text" name="name" id="name" class="form-control"></br>
          <label>Lastname</label></br>
          <input type="text" name="address" id="address" class="form-control"></br>
          <label>Mobile</label></br>
          <input type="text" name="mobile" id="mobile" class="form-control"></br>

          <input type="submit" value="Save" class="btn btn-success btn-sm">
          <a class="btn btn-secondary btn-sm" href="{{url('/contact')}}">BACK</a>

      </form>
   
  </div>

</div>
 
@stop