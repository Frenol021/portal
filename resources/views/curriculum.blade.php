@extends('master')
@section('content')
@extends('layouts.app')

 <a href="home" class="btn btn-primary head">GO Back</a>
 
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
   
       

    </div>
    
    <div class="item">
    

@foreach($users as $user)

<div class="custo-image1" >
<div class="col-sm-2">
                    
                    <img class="image1" src="{{$image=\App\Models\Unit::query()->where('id',$user->unit_id)->first()->image}}" alt="">
                    
                </div>
    
  </div>
  
  
  <h3 class="unit">{{$unit=\App\Models\Unit::query()->where('id',$user->unit_id)->first()->unit}}</h3>
  
  <form action="removeCurriculum" method="POST">
                    @csrf 
                    <input type="hidden" name="user_id" value="{{$user->id}}">
                    
  </form>
  <div class="col-sm-3">
            <a href="{{route('removeCurriculum',$user->id)}}" class="btn btn-warning">remove the enrollment</a>
        </div>
 @endforeach
        
 </div>
    
</div>

@endsection