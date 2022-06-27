<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Unit;
use App\Models\User;
use PDF;
class ReportController extends Controller
{
    //
    public function report()
    {
        

       $units=Course::all();
       
        return view('attacheeReport', compact('units'));
    }

    public function downloadReport(){ 
        $units=Course::all();

        $pdf = PDF::loadView('pdf', compact('units'))->setOptions(['defaultFont' => 'sans-serif']); 
            
        return $pdf->download('attacheeReport.pdf'); 
    }
}
