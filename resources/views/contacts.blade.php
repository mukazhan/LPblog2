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
        <h2>Contacts page</h2>
       
<!--         {!! $script !!} -->

  @{{ var }}

  {{ isset($bvar) ? $bvar:$title }}
  {{ $bvar or $title}}
<hr>

@if(count($data) < 3)
  Array elemets less than 3
@elseif(count($data) > 20)
  Array elements more than 20

@else 
    Array elemets more than 3
@endif


<hr>

<ul>
  
@for($i=0; $i<count($dataList); $i++)
<li>
  {{$dataList[$i]}}
</li>
@endfor
</ul>

<hr>
<ul>
  
@foreach($data as $key=>$value)
<li>
  
  {{$key."=>".$value}}
</li>


@endforeach
</ul>


<hr>

<ul>


@forelse($data as $key=>$value)
<li>
  {{$key."=>".$value}}
</li>

@empty
  <p> No Items</p>

@endforelse
</ul>

<hr>
      </div>
      
    </div>
</div>

@endsection

@section('footer')
  @parent
@endsection
