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
      <div class="col-md-9">
        <h2>About page</h2>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
      </div>
      
    </div>
</div>



@endsection

@section('footer')
  @parent
@endsection
