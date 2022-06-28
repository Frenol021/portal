@extends('layouts.app')
@extends('master')
@section('content')
<article class="wrapper">
  <h2 class="title">Shiftech Africa</h2>
 
</article>
    <div class="container">
 
        <div class="row justify-content-center header">


            <div class="col-md-12 head2">
                <div class="card ">
                    <div class="card-header">{{ __('curriculum') }} 


                    </div>
                   
<marquee bgcolor="#D0D3D4" color="red" width="100%" >Welcome to shiftech Africa we are ready to serve you. </marquee>
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
                                    <div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert">x</button>
                                        {{ session('message') }}
                                    </div>
                                @endif


                            </div>
                            <div class="container2">
    
                                <div class="">

                                    @foreach ($users as $user)
                                        <div class="custo-image">

                                            <img class=" image" src="{{ $user->image }}" alt="">



                                            <h3 class="unit">{{ $user->unit }}</h3>



                                            <button class="btn-warnin button "><a class="link"
                                                    href="{{ route('add_to_curriculum', $user->id) }}">enroll</a></button>





</div>
                                    @endforeach
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
              <!-- footer-->

              
</body>
        @endsection
