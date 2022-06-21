
@extends('layouts.app')
@extends('master')
@section('content')
<div class="container">
    <div class="row justify-content-center header">
        <div class="col-md-12 ">
            <div class="card ">
                <div class="card-header">{{ __('curriculum') }}
               
               
                </div>
               

            <!--<div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success"  role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div> -->
                <div class="card-body">
                    @if (session('message'))
                        <div class="alert alert-success"  >
                          <button type="button" class="close" data-dismiss="alert">x</button>
                            {{ session('message') }}
                        </div>
                    @endif

                   
                </div> 
                <div class="custo">
    <div class="col-sm-4">
        

    </div>
    <div class="">

@foreach($users as $user)

<div class="custo-image">
  
  <img class="image" src="{{$user->image}}" alt="">
  
  
  
  <h3 class="unit">{{$user->unit}}</h3>

  
                                
            <button class="btn-warning button "><a href="{{route('add_to_curriculum',$user->id)}}" >enroll</a></button>
             
                                
    
  
  
</div>
 
 
 @endforeach
    </div>

   
</div>
            </div>
        </div>
    </div>
</div>

@endsection