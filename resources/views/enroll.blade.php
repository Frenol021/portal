@extends('master')
@section('content')
@extends('layouts.app')
<a href="home" class="btn btn-primary head">GO Back</a>
<div class="" >
@foreach($users as $user)
<div class=" custo-image2">

  <img class="image" src="{{$user->image}}" alt=""><h3 class="unit">{{$user->unit}}</h3>
  
  
  </div>

  <form action="add_to_curriculum" method="POST">
                    @csrf 
                    <input type="hidden" name="user_id" value="{{$user->id}}">
                    
    
  
   
 
  
</form>
<a href="{{route('add_to_curriculum',$user->id)}}" class=" btn btn-success enroll">Add to curriculum</a>

@endforeach

</div>

@endsection
