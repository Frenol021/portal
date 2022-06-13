@extends('master')
@section('content')

<div class="custom">
    <div class="col-sm-4">
        <h1>curriculum</h1>

    </div>
    <div class="item">

@foreach($users as $user)

  
  <img class="image" src="{{$user->image}}" alt="">
  
  <h3 class="unit">{{$user->unit}}</h3>
  
 
  <a href="enroll" class=" btn btn-success button">enroll</a>
 @endforeach
    </div>
</div>

@endsection