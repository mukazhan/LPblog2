@extends('layouts.layout')

@section('navbar')
  @parent
@endsection

@section('header')
  @parent
@endsection

@section('content')


  <div class="container">
    <!-- Example row of columns -->
    <div class="row">


<form method="POST" action="{{route('test.store')}}" enctype="multipart/form-data">
    @csrf

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">First name</label>
      <input type="text" class="form-control" id="fname" name="fname" value="{{ old('fname') }}">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Last name</label>
      <input type="text" class="form-control" id="lname" name="lname" value="{{ old('lname') }}">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" name="address" value="{{ old('address') }}">
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity" name="cityname" value="{{ old('cityname') }}">
    </div>
  </div>
  <button type="submit" class="btn btn-success">Send</button>
</form>
    </div>

    <hr>

  </div> <!-- /container -->

  <div>
    
    
  </div>

@endsection

@section('footer')
  @parent
@endsection
