@extends('layout.layout')
@section('content')
 
<div class="mx-auto card mt-5 justify-content-around" style="width: 500px">

  <div class="card-header">Contactus Page</div>

  <div class="card-body">
      
      <form action="{{ url('contact/' .$contacts->id) }}" method="post">
          {!! csrf_field() !!}
          @method("PATCH")
          <input type="hidden" name="id" id="id" value="{{$contacts->id}}" id="id" />
          <label>Firstname</label></br>
          <input type="text" name="name" id="name" value="{{$contacts->name}}" class="form-control"></br>
          <label>Lastname</label></br>
          <input type="text" name="address" id="address" value="{{$contacts->address}}" class="form-control"></br>
          <label>Mobile</label></br>
          <input type="text" name="mobile" id="mobile" value="{{$contacts->mobile}}" class="form-control"></br>
          <input type="submit" value="Update" class="btn btn-success btn-sm">
          <a class="btn btn-secondary btn-sm" href="{{url('/contact')}}">BACK</a>
      </form>
   
  </div>
</div>
 
@stop