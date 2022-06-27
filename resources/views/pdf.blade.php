@extends('master')


    <div class: "report-container">

        <div class= "col-md-10">
           <h3> shiftech Attachee Report </h3>

            
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

            </table>


        </div>
    </div>

