@extends('master')

@section('content')
    @extends('layouts.app')
@if(count($users))
    <a href="home" class="btn btn-primary head">GO Back</a><br><br>


    <div class="row">
        <div class="col-75">
            <div class="container">
                <div class="col-ms-1">
                    <div class="card-body">
                        @if (session('message'))
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert">x</button>
                                {{ session('message') }}
                            </div>
                        @endif


                    </div>



                </div>

                <div class="item">



                    @foreach ($users as $user)

                        <div class="custo-image1">

                            <div class="col-50">

                                <img class="image1"
                                    src="{{ $image = \App\Models\Unit::query()->where('id', $user->unit_id)->first()->image }}"
                                    alt="">


                                <h3 class="unit1">
                                    {{ $unit = \App\Models\Unit::query()->where('id', $user->unit_id)->first()->unit }}
                                    <span>{{ $unit1 = \App\Models\Unit::query()->where('id', $user->unit_id)->first()->amount }}<span>
                                </h3>
                                

                             @php $total =$unit1; @endphp


                                <a href="{{ route('removeCurriculum', $user->id) }}" class="btn btn-warning remove">remove
                                    the
                                    enrollment</a>
                            </div>
               
          

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
                    <a href="{{ 'checkout' }}" class="btn btn-info check">
                        <h3>checkout </h3>
                    </a>
                </div>
            </div>
        </div>



    </div>
    @else
    <h1> you have not enrolled yet </h1>
 <a href="home" class="btn btn-warning head1"><h2>click here to enroll</h2></a><br><br>
@endif
@endsection
