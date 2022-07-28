@extends('master')
@section('content')
    @extends('layouts.app')
    @if(count($units))
<a href="home" class="btn btn-primary head">GO Back</a>
    <div class: "report-container">

        <div class= "col-md-10">
            <h3 style= "font-size: 250%; text-align: center;"> <b>shiftech Attachee Report</b> </h3>

            
            <table background-color: "red">
                <tr>
                    <th>Name</th>

                    <th>Course</th>

                    <th>Employer no</th>
                </tr>
@foreach($units as $unit)
                <tr>
                    <td>{{\App\Models\User::query()->where('id', $unit->user_id)->first()->name }}</td>

                    <td>{{\App\Models\Unit::query()->where('id', $unit->unit_id)->first()->unit }}</td>
                   
                 <td>{{\App\Models\User::query()->where('id', $unit->user_id)->first()->employer_no}}</td>

                </tr>


@endforeach

            </table><br><br>

 <a class= "btn btn-danger button2" href="{{('downloadReport')}}">Download PDF</a>
        </div>
    </div>
    
    @else
        <h1>No student enrolled</h1>
         <a href="home" class="btn btn-warning head1"><h2>go back</h2></a><br><br>
    @endif

@endsection
