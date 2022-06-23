@extends('master')
@section('content')
    @extends('layouts.app')

    <a href="home" class="btn btn-primary head">GO Back</a>

    <div class="custom">
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


                    <img class="image1"
                        src="{{ $image = \App\Models\Unit::query()->where('id', $user->unit_id)->first()->image }}"
                        alt="">


                    <h3 class="unit1">{{ $unit = \App\Models\Unit::query()->where('id', $user->unit_id)->first()->unit }}</h3>

                    <a href="{{ route('removeCurriculum', $user->id) }}" class="btn btn-warning remove">remove the enrollment</a>
                </div>
           



                <form action="removeCurriculum" method="POST">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ $user->id }}">

                </form>
            @endforeach

        </div>

    </div>
@endsection
