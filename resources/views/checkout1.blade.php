@extends('master')

@section('content')
    @extends('layouts.app')
  
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="{{route('lipa')}}" method="POST">
@csrf
        <div class="row mr-4">
          <div class="col-60">
            <h3>Personal details</h3><hr>
            <label for="fname"><i class="fa fa-user"></i> Full Name: </label>
            {{ Auth::user()->name }}<br>
            <label for="email"><i class="fa fa-envelope"></i> Email: </label>
            {{ Auth::user()->email }}
           
            


            <div class="row">
              <div class="col-50">
                <label for="phone_no">phone no: </label>
             {{$phone = Auth::user()->phone_no }}

              </div>
              <div class="col-50">
                
               
              </div>
            </div>
          </div>




        </div>
    

      </form>
    </div>
    
   <div class="container">
                  <div class="col-50">
                  <h3><b>order</b></h3><hr>

                    @foreach ($users as $user)
                        <div class="custo-image2">

                                                    <img class="image2"
                                    src="{{ $image = \App\Models\Unit::query()->where('id', $user->unit_id)->first()->image }}"
                                    alt="">


                                <h3 class="unit1">
                                    {{ $unit = \App\Models\Unit::query()->where('id', $user->unit_id)->first()->unit }}
                                    <span>{{ $unit1 = \App\Models\Unit::query()->where('id', $user->unit_id)->first()->amount }}<span>
                                </h3>


                             @php $total =$unit1; @endphp


                        </div>
                    @endforeach
                    </div>
              </div> 
  </div>

      
        <div class="col-25">
            <div class="container">
                <div class="box">
                    <div>
                        <h1>Enrollment summary </h1>
                    </div><br><br>
                    <div>
                        <h2>Total: <span>{{$total}}</span> </h2>
                    </div>
                    <div>
                        <p> shiftech your business technology patner</p>


                    </div>


                    <a href="{{route('lipa')}}" class="btn btn-info check">
                        <h3>complete checkout </h3>

                    </a><hr>

                                        <a href="home" class="btn btn-warning check">
                        <h3>add courses ? </h3>

                    </a>
                </div>
            </div>
        </div>
</div>
@endsection


