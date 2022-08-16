@extends('master')
@section('content')
@extends('layouts.app')
<a href="home" class="btn btn-primary head">GO Back</a>



<div class="container1">
    <div class="row justify-content-center">
        <div class="col-md-6">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Get started with your course</h4>
                </div>
                <div class="card-body">
                    <h1> table of content </h1>
                    <form action="design" method="GET">
                        @csrf

                 <div class="row">
       <!--         <div class="col">
                        <h3>introduction</h3>
                        </div>
                        <div class="col">
                        <button type="submit" class="btn btn-primary"><h5>start learning</h5></button>
                    </div>
                    </div><hr> -->

                        <div class="row">
                        <div class="col">
                        @foreach ($contents as $content)
 
                        <h3 class="unit"><li>{{ $content }}</li></h3>

                        @endforeach
                        </div>

                        <div class="col">
                        <button class="btn-warning button "><a  href="design"><h4>{{ $content }}</h4></a></button>
                        
                    </div>
                        </div>

                                                                  
                    </form>
<ul class="pager">
  <li class="previous"><a href="#">Previous</a></li>
  <li class="next"><a href="#">Next</a></li>
</ul>
                </div>
            </div>
        </div>
    </div>
</div>
      
@endsection
