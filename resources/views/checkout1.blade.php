@extends('master')

@section('content')
    @extends('layouts.app')

<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="{{route('lipa')}}" method="POST">
@csrf
        <div class="row">
          <div class="col-50">
            <h3>Personal details</h3><hr>
            <label for="fname"><i class="fa fa-user"></i> Full Name: </label>
            {{ Auth::user()->name }}<br>
            <label for="email"><i class="fa fa-envelope"></i> Email: </label>
            {{ Auth::user()->email }}
           
            


            <div class="row">
              <div class="col-50">
                <label for="phone_no">phone no: </label>
               {{ Auth::user()->phone_no }}
              </div>
              <div class="col-50">
                
               
              </div>
            </div>
          </div>




        </div>
    

      </form>
    </div>
  </div>

       
        <div class="col-25">
            <div class="container">
                <div class="box">
                    <div>
                        <h1>Enrollment summary </h1>
                    </div><br><br>
                    <div>
                        <h2>Total: <span></span> </h2>
                    </div>
                    <div>
                        <p> shiftech your business technology patner</p>


                    </div>
                    <a href="{{route('lipa')}}" class="btn btn-info check">
                        <h3>complete checkout </h3>
                    </a>
                </div>
            </div>
        </div>
</div>
@endsection


