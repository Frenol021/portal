@extends('master')
@section('content')
@extends('layouts.app')

<div class="custom">
    <div class="col-sm-4">
    <div class="card-body">
                    @if (session('message'))
                        <div class="alert alert-success"  >
                          <button type="button" class="close" data-dismiss="alert">x</button>
                            {{ session('message') }}
                        </div>
                    @endif

                   
                </div> 
    <a href="home" class="btn btn-primary head">GO Back</a>
        <h1>curriculum</h1>

    </div>
    
    <div class="item">
    

@foreach($users as $user)

<div >
<div class="col-sm-3">
                    
                    <img class="ima" src="{{$user->image}}" alt="">
                    
                </div>
    
  
  <h3 class="u">{{$user->unit}}</h3>
  </div>
  <form action="removeCurriculum" method="POST">
                    @csrf 
                    <input type="hidden" name="user_id" value="{{$user->id}}">
                    
  </form>
  <div class="col-sm-3">
            <a href="{{route('removeCurriculum',$user->id)}}" class="btn btn-warning">remove from curriculum</a>
        </div>
 @endforeach
        
 </div>
    
</div>

@endsection