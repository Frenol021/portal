@extends('master')
@section('content')
@extends('layouts.app')

<div class="custom">
    <div class="col-sm-4">
    <a href="home" class="btn btn-primary head">GO Back</a>
        <h1>curriculum</h1>

    </div>
    <div class="item">
    

@foreach($users as $user)

<div >
<div class="col-sm-3">
                    <a href="enroll/{{$user->id}}">
                    <img class="ima" src="{{$user->id}}" alt="">
                    </a>
                </div>
    
  
  <h3 class="u">{{$user->unit}}</h3>
  </div>
  <div class="col-sm-3">
            <a href="removeCurriculum{{$user->cart_id}}" class="btn btn-warning">remove from curriculum</a>
        </div>
 @endforeach
        
 </div>
    
</div>

@endsection