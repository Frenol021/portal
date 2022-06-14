
@extends('layouts.app')
@extends('master')
@section('content')
<div class="container">
    <div class="row justify-content-center header">
        <div class="col-md-12 ">
            <div class="card ">
                <div class="card-header">{{ __('Dashboard') }}
               
               
                </div>
               

            <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success"  role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div> 
                <div class="custo">
    <div class="col-sm-4">
        

    </div>
    <div class="">

@foreach($users as $user)

<div class="custo-image">
  
  <img class="image" src="{{$user->image}}" alt="">
  
  <h3 class="unit">{{$user->unit}}</h3>
  
</div>
 
 
 @endforeach
    </div>

    <a href="enroll" class="btn-success button">click here to enroll</a>
</div>
            </div>
        </div>
    </div>
</div>

@endsection