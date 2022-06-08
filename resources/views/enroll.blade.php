@extends('master')
@section('content')

<div class="" >




@foreach($users as $user)

  <img class="image" src="{{$user->image}}" alt="">
  
  <h3 class="unit">{{$user->unit}}</h3>
  
  <a href="enroll" class=" btn btn-success enroll">Add to curriculum</a><br>
  <a href="enroll" class=" btn btn-success ">remove to curriculum</a>
 @endforeach


</div>

@endsection
